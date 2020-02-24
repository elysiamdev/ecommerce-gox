import { makeCreateUserLocalCredentials } from '../../../../src/services/users/services'
import { CreateUserLocalCredentialsModel } from '../../../../src/services/users/model'
import { InputValidationError } from '../../../../src/logic/errors'

describe('Users :: services :: createUserProfile', () => {
    const repositoryMock = { 
        client: {}, 
        findByEmail: async () => ({ id: 0, password: "", user_profile_id: 0 }),
        create: (profile: CreateUserLocalCredentialsModel) => {
                return Promise.resolve({ id: 1 })
            }   
    }

    const createUserLocalCredentials = makeCreateUserLocalCredentials(repositoryMock, (password: string) => password)

    it('creates a valid user profile', async () => {
        const credentials = { 
            email: 'bruno@email.com', 
            password: 'securep@ssword123', 
            confirm: 'securep@ssword123' }

        const result = await createUserLocalCredentials(credentials, { id: 1 })

        expect(result).not.toBeNull()
    })

    it('throws InvalidInputError when email is not valid', async () => {
        const invalidCredentials = { 
            email: 'invalid@email', 
            password: 'securep@ssword123', 
            confirm: 'securep@ssword123' }

        await expect(createUserLocalCredentials(invalidCredentials, { id: 1 })).rejects.toThrowError(InputValidationError)

        
    })

    it('throws InvalidInputError when password does not match', async () => {
        const invalidCredentials = { 
            email: 'valid@email.com', 
            password: 'not_matching', 
            confirm: 'password' }

        await expect(createUserLocalCredentials(invalidCredentials, { id: 1 })).rejects.toThrowError(InputValidationError)
    })

    it('throws InvalidInputError when password is shorter than 6 characters', async () => {
        const invalidCredentials = { 
            email: 'valid@email.com', 
            password: '5char', 
            confirm: '5char' }

        await expect(createUserLocalCredentials(invalidCredentials, { id: 1 })).rejects.toThrowError(InputValidationError)
    })

})
