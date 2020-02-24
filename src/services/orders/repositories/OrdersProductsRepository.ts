import { CreateOrderProductModel } from "../models/CreateOrderProductModel"

class OrdersProductsRepository {
    private readonly client: any

    constructor(knex: any) {
        this.client = knex
    }

    async create(product: CreateOrderProductModel) {
        const [id] = this.client('orders_products').insert(product).returning('id')

        if(id) {
            return { id }
        }
        return null
    }

    async createMany(products: Array<CreateOrderProductModel>) {
        const ids = await this.client('orders_products').insert(products).returning('id')
        return ids
    }
}

export { OrdersProductsRepository }