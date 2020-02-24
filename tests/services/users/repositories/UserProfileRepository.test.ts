import knex from '../../../../src/server/db'
import { UserProfileRepository } from '../../../../src/services/users/db/UserProfileRepository'
import { seedTables, clearDb } from '../../../helpers'

describe('Users :: db :: UserProfileRepository', () => {
    const repository = new UserProfileRepository(knex)

    describe('#create', () => {
        test('saves user data into db', async () => {
            const profile = { fullname: "Bruno Schmidt", created_at: new Date(), cpf: "489.356.820-55" }
            const { id } = await repository.create(profile)
    
            expect(id).toBeDefined()
        })
    })
})

beforeEach(async () => await seedTables())
afterEach(async () => await clearDb('users_profiles'))
afterAll(() => knex.destroy())