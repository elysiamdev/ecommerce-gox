import knex from "../../../../src/server/db"
import { OrdersRepository } from "../../../../src/services/orders/repositories"
import { CreateOrderModel } from "../../../../src/services/orders/models/CreateOrderModel"
import { seedTables, clearDb } from "../../../helpers"

describe('Services :: Order :: Repositories :: OrdersRepository', () => {
    describe('#create', () => {
        it('creates one order', async () => {
            const ordersRepository = new OrdersRepository(knex)
            const user = await knex('users_profiles').first()
            const order: CreateOrderModel = {
                user_profile_id: user.id,
                shipping_address_name: "Testador",
                shipping_address_street: "Rua de teste",
                shipping_address_number: "123",
                shipping_address_complement: null,
                shipping_address_postal_code: "12345-789",
                shipping_address_city: "Cidade de Teste",
                shipping_address_state: "Estado de Teste",
                shipping_address_country: "País de Teste",
                billing_address_name: "Testador",
                billing_address_street: "Rua de teste",
                billing_address_number: "123",
                billing_address_complement: null,
                billing_address_postal_code: "12345-789",
                billing_address_city: "Cidade de Teste",
                billing_address_state: "Estado de Teste",
                billing_address_country: "País de Teste"
            }

            const result = await ordersRepository.create(order)
            expect(result.id).toBeDefined()
        })
    })
})

beforeEach(async () => await seedTables())
afterEach(async () => await clearDb('orders'))
afterEach(async () => await clearDb('users_profiles'))
afterAll(() => knex.destroy())