import { makeCreateUserProfile } from '../../../../src/services/users/services/createUserProfile'
import { CreateUserProfileModel } from '../../../../src/services/users/model'

describe('Users :: services :: createUserProfile', () => {
    const repositoryMock = { 
        client: {}, 
        findById: async () => ({ id: 1, fullname: "None" }),
        create: (profile: CreateUserProfileModel) => {
                expect(profile.fullname).toBe('Bruno Schmidt')
                return Promise.resolve({ id: 1 })
            }   
    }

    const createUserProfile = makeCreateUserProfile(repositoryMock)

    test('creates a valid user profile', async () => {
        const profile = { 
            fullname: 'Bruno Schmidt', 
            cpf: "489.356.820-55",
            email: 'bruno@email.com', 
            password: 'securep@ssword123', 
            confirm: 'securep@ssword123', 
            telephone: '+555134567890' }

        const result = await createUserProfile(profile)

        expect(result).not.toBeNull()
    })
})
