import { CreateOrderRequestModel, Order } from '../models'
import { validadeCreateOrderRequestModel } from '../providers/validator'
import knex from '../../../server/db'
import { OrdersRepository } from '../repositories'

function mapOrderWithProductsToOrder(order: any, products: any): Order {
    return {
        id: order.id,
        reference: order.reference,
        addresses: {
            shippingAddress: {
                name: order.shipping_address_name,
                street: order.shipping_address_street,
                number: order.shipping_address_number,
                complement: order.shipping_address_complement,
                postal_code: order.shipping_address_postal_code,
                city: order.shipping_address_city,
                state: order.shipping_address_state,
                country: order.shipping_address_country,
            },
            billingAddress: {
                name: order.billing_address_name,
                strett: order.billing_address_strett,
                number: order.billing_address_number,
                complement: order.billing_address_complement,
                postal_code: order.billing_address_postal_code,
                city: order.billing_address_city,
                state: order.billing_address_state,
                country: order.billing_address_country,
            },
        },
        products: products
    }
}

function mapAddressToShippingOrderAddress(address: any) {
    return {
        shipping_address_name: address.name,
        shipping_address_street: address.street,
        shipping_address_number: address.number,
        shipping_address_complement: address.complement,
        shipping_address_postal_code: address.postal_code,
        shipping_address_city: address.city,
        shipping_address_state: address.state,
        shipping_address_country: address.country,
    }
}

function mapAddressToBillingOrderAddress(address: any) {
    return {
        billing_address_name: address.name,
        billing_address_street: address.street,
        billing_address_number: address.number,
        billing_address_complement: address.complement,
        billing_address_postal_code: address.postal_code,
        billing_address_city: address.city,
        billing_address_state: address.state,
        billing_address_country: address.country,
    }
}


const createOrder = 
    (createUoW: any) => 
        async (requestData: CreateOrderRequestModel, user: { id: number }): Promise<Order|null> => {
    const unitOfWork = await createUoW()

    try {
        // first step: validation
        await validadeCreateOrderRequestModel(requestData)

        // second step: prepare data
        const userAddresses = await unitOfWork.UserAddressRepository?.findUserAddresses(user.id)
        const shippingAddress = userAddresses?.find((a: any) => a.id === requestData.shipping_address.id)
        let billingAddress = null
        if(requestData.use_shipping_address) {
            billingAddress = shippingAddress
        }
        else {
            billingAddress = userAddresses?.find((a: any) => a.id === requestData.billing_address?.id)
        }

        // third step: persist data
        const { id: orderId } = await unitOfWork.OrdersRepository.create({ 
            user_profile_id: user.id,
            ...mapAddressToShippingOrderAddress(shippingAddress),
            ...mapAddressToBillingOrderAddress(billingAddress)
        })
        const temp = requestData.products.map(p => ({...p, product_id: p.id, id: undefined, order_id: orderId}))
        await unitOfWork.OrdersProductsRepository.createMany(temp)
        unitOfWork.commit()
        
        // fourth step: return persisted data
        const ordersRepository = new OrdersRepository(knex)
        const { order, products } = await ordersRepository.findOrderWithProducts(orderId)
        return mapOrderWithProductsToOrder(order, products)
    }
    catch(error) {
        unitOfWork.rollback()
        throw error
    }
}

export { createOrder } 