import supertest from 'supertest'
import createServer from '../../../../src/server'
import { clearDb, seedTables } from '../../../helpers'
import knex from '../../../../src/server/db'


afterEach(async () => { 
    await clearDb('users_profiles')
})
beforeEach(async () => await seedTables())
afterAll(async () => await knex.destroy())

const server = createServer()
const request = supertest(server)

describe('POST /api/v1/checkout/orders', () => {
    describe('when sent valid data', () => {
        it('creates one order', async () => {
            const payload = { 
                shipping_address: { id: 1 },
                use_shipping_address: true,
                billing_address: false,
                products: [{
                    id: 1,
                    quantity: 1
                }]
            } 
    
            const response = await request
                                .post('/api/v1/checkout/orders')
                                .type('form')
                                .send(payload)
    
            expect(response.status).toBe(201)

            const order = response.body
            expect(order.id).toBeDefined()
        })
    })

    describe('When sent invalid data', () => {
        it('not implemented', () => {
            expect(false).toBe(true)
        })
    })
})
