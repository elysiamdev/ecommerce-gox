import { seedTables, clearDb } from '../../../helpers'
import { makeCreateUserProfile } from '@services/users/services/createUserProfile'
import { makeCreateUserLocalCredentials } from '@services/users/services/createUserLocalCredentials'
import { makeRegisterUser } from '@services/users/services/registerUser'
import knex from '@database/index'
import { UnitOfWork } from '@logic/UnitOfWork'

describe('Users :: services :: createUserProfile', () => {
    test('creates a valid user profile', async () => {
        const unitOfWork = new UnitOfWork(knex)
        await unitOfWork.initialize()

        const createUserProfile = makeCreateUserProfile(unitOfWork.getUserProfileRepository())
        const createUserCredentials = makeCreateUserLocalCredentials(unitOfWork.getUserLocalCredentialsRepository(), (password: string) => password)
        const registerUser = makeRegisterUser(createUserProfile, createUserCredentials)

        const profile = { 
            fullname: 'Bruno Schmidt', 
            email: 'bruno@email.com', 
            password: 'securep@ssword123', 
            confirm: 'securep@ssword123', 
            telephone: '+555134567890' }

        const user = await registerUser(profile)

        unitOfWork.commit()
        
        expect(user?.id).toBe(1)
    })
})

beforeEach(async () => await seedTables())
afterEach(async () => await clearDb('users_profiles'))
afterAll(() => knex.destroy())