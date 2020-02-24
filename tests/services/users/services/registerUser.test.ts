import { seedTables, clearDb } from '../../../helpers'
import { makeCreateUserProfile } from '../../../../src/services/users/services/createUserProfile'
import { makeCreateUserLocalCredentials } from '../../../../src/services/users/services/createUserLocalCredentials'
import { makeRegisterUser } from '../../../../src/services/users/services/registerUser'
import knex from '../../../../src/server/db'
import { createUnitOfWork } from '../../../../src/logic/createUnitOfWork'

describe('Users :: services :: createUserProfile', () => {
    test('creates a valid user profile', async () => {
        const unitOfWork = await createUnitOfWork(knex)()

        const createUserProfile = makeCreateUserProfile(unitOfWork.UserProfileRepository)
        const createUserCredentials = makeCreateUserLocalCredentials(unitOfWork.UserLocalCredentialsRepository, (password: string) => password)
        const registerUser = makeRegisterUser(createUserProfile, createUserCredentials)

        const profile = { 
            fullname: 'Bruno Schmidt', 
            email: 'bruno@email.com', 
            password: 'securep@ssword123', 
            confirm: 'securep@ssword123', 
            telephone: '+555134567890',
            cpf: "489.356.820-55",
            agreed: true }

        const user = await registerUser(profile)

        unitOfWork.commit()
        
        expect(user?.id).toBeDefined()
    })
})

beforeEach(async () => await seedTables())
afterEach(async () => await clearDb('users_profiles'))
afterAll(() => knex.destroy())