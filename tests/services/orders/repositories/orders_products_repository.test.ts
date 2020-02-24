import knex from "../../../../src/server/db"
import { OrdersProductsRepository } from "../../../../src/services/orders/repositories"
import { seedTables, clearDb } from "../../../helpers"

describe('Services :: Order :: Repositories :: OrdersProductsRepository', () => {
    describe('#createMany', () => {
        it('creates one order product', async () => {
            const ordersProductsRepository = new OrdersProductsRepository(knex)
            const order = await knex('orders').first()
            const products = await knex('products').limit(2)

            const orderProducts = products.map((p: any) => ({
                product_id: p.id,
                quantity: 1,
                order_id: order?.id
            }))

            const result = await ordersProductsRepository.createMany(orderProducts)
            
            expect(result.length).toBe(2)
        })
    })
})

beforeEach(async () => await seedTables())
afterEach(async () => await clearDb('orders'))
afterEach(async () => await clearDb('users_profiles'))
afterAll(() => knex.destroy())