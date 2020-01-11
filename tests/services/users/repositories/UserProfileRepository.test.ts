import knex from '@database/index'
import { UserProfileRepository } from '@services/users/db/UserProfileRepository'
import { seedTables, clearDb } from '../../../helpers'

describe('Users :: db :: UserProfileRepository', () => {
    const repository = new UserProfileRepository(knex)
    
    // describe('#findAll', () => {
    //     test('retrieves all totems data from table', async () => {
    //         const result = await repository.findAll()
    
    //         expect(result.length).toBe(1)
    //         expect(result[0]).toBeInstanceOf(Totem)
    //     })
    // })

    describe('#create', () => {
        test('saves totem data into db', async () => {
            const profile = { fullname: "Bruno Schmidt", created_at: new Date() }
            const { id } = await repository.create(profile)
    
            expect(id).toBeDefined()
        })
    })

    // describe('#delete', () => {
    //     test('deletes totem from the db', async () => {
    //         const id = 1
            
    //         expect(await repository.exists(id)).toBe(true)

    //         expect(await repository.delete(id)).toBe(true)
    //         expect(await repository.exists(id)).toBe(false)
    //     })
    // })

    // describe('#update', () => {
    //     test('updates totem data', async () => {
    //         const id = 1
    //         const newData = { fullname: 'Updated totem fullname' }

    //         const updatedTotem = await repository.update(id, newData)

    //         expect(updatedTotem).toBeTruthy()
    //         expect(updatedTotem?.fullname).toBe(newData.fullname)
            
    //     })
    // })

    // describe('#exists', () => {
    //     test('checks if a totem with id exists in db', async () => {
    //         const existentId = 1
    //         const inexistentId = 812374

    //         expect(await repository.exists(existentId)).toBe(true)
    //         expect(await repository.exists(inexistentId)).toBe(false)
    //     })
    // })
})

beforeEach(async () => await seedTables())
afterEach(async () => await clearDb('users_profiles'))
afterAll(() => knex.destroy())