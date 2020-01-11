import supertest from 'supertest'
import createServer from '../../../../src/server'
import { clearDb, seedTables } from '../../../helpers'

const server = createServer()
const request = supertest(server)

describe('POST /site/registrar', () => {
    test('creates one user', async () => {
        const payload = { 
            fullname: 'Bruno Schmidt', 
            email: 'bruno@email.com', 
            password: 'securep@ssword123', 
            confirm: 'securep@ssword123', 
            telephone: '+555134567890' 
        }

        const response = await request
                            .post(`/site/registrar`)
                            .type('form')
                            .send(payload)

        expect(response.status).toBe(201)
    })
})

beforeEach(async () => await seedTables())
afterEach(async () => await clearDb('users_profiles'))