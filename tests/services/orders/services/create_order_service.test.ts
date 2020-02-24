import { createOrder } from "../../../../src/services/orders/services"
import knex from "../../../../src/server/db"
import { createUnitOfWork } from "../../../../src/logic/createUnitOfWork"
import { seedTables, clearDb } from "../../../helpers"

describe('Services :: Order :: createOrder', () => {
    describe('when sent valid data', () => {
        it('creates one order', async () => {
            const payload = { 
                shipping_address: { id: 1 },
                use_shipping_address: true,
                billing_address: null,
                products: [{
                    id: 1,
                    quantity: 1
                },
                {
                    id: 2,
                    quantity: 2
                }]
            }

            const user = await knex('users_profiles').first()
            const uow = await createUnitOfWork(knex)
            const order = await createOrder(uow)(payload, user)

            expect(order?.id).toBeDefined()
            expect(order?.reference).toBeDefined()
        })
    })
})

beforeEach(async () => await seedTables())
afterEach(async () => await clearDb('orders'))
afterEach(async () => await clearDb('users_profiles'))
afterAll(() => knex.destroy())
