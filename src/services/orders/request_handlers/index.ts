import { createUnitOfWork } from "../../../logic/createUnitOfWork"
import { createOrder } from '../services'
import knex from "../../../server/db"

const toBoolean = (value: string|true): boolean  => {
    if(value === 'true' || value === true)
        return true
    return false
}

const mapRequestDataToRequestModel = ({ shipping_address, billing_address, use_shipping_address, products }
    : { shipping_address: { id: string }, 
        billing_address: { id: string }|null, 
        use_shipping_address: string, 
        products: Array<{ id: string, quantity: string}> 
    }) => {

    return {
        use_shipping_address: toBoolean(use_shipping_address),
        products: products.map(p => ({ id: parseInt(p.id), quantity: parseInt(p.quantity)})),
        billing_address: (billing_address === null)? null : { id: parseInt(billing_address.id) },
        shipping_address: { id: parseInt(shipping_address.id) }
    }
}

const createOrderHandler = async (req: any, res: any, next: any) => {
    const createUoW = createUnitOfWork(knex)
    const createOrderRequestModel = mapRequestDataToRequestModel(req.body)
   
    try {
        const order = await createOrder(createUoW)(createOrderRequestModel, { id: req.user.id })

        res.status(201).send(order)
    }
    catch(error) {
        next(error)
    }
}

export { createOrderHandler }