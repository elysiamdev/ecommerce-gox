import { CreateOrderModel } from "../models/CreateOrderModel"

function generateReference(orderId: number): string {
    return `REFERENCE_${orderId}`
}

class OrdersRepository {
    private readonly client: any

    constructor(knex: any) {
        this.client = knex
    }

    async create(order: CreateOrderModel): Promise<{ id: number, reference: string }> {
        const [ id ] = await this.client('orders').insert({...order, reference: `TEMP_REF_${new Date()}`}).returning('id')
        await this.client('orders').where('id', id).update({ reference: generateReference(id)})

        return await this.client('orders').select(['id', 'reference']).where('id', id).first()
    }

    async findOrderWithProducts(orderId: number) {
        const order = await this.client('orders')
            .where('id', orderId)
            .first()

        const products = await this.client('orders_products')
            .join('products', 'products.id', '=', 'orders_products.id')
            .where('order_id', order?.id)
            .select([
                'orders_products.id',
                'orders_products.quantity',
                'products.name',
                'products.images',
                'products.description',
            ])                
        return { order, products }
    }
}

export { OrdersRepository } 