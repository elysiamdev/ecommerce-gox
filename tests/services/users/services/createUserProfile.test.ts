import { UserProfileRepository } from '@services/users/db/UserProfileRepository'
import { seedTables, clearDb } from '../../../helpers'
import { makeCreateUserProfile } from '@services/users/services/createUserProfile'
import { CreateUserProfileModel } from '@services/users/model'

describe('Users :: services :: createUserProfile', () => {
    const repositoryMock = { 
        client: {}, 
        create: (profile: CreateUserProfileModel) => {
                expect(profile.fullname).toBe('Bruno Schmidt')
                return Promise.resolve({ id: 1 })
            }   
    }

    const createUserProfile = makeCreateUserProfile(repositoryMock)

    test('creates a valid user profile', async () => {
        const profile = { 
            fullname: 'Bruno Schmidt', 
            email: 'bruno@email.com', 
            password: 'securep@ssword123', 
            confirm: 'securep@ssword123', 
            telephone: '+555134567890' }

        const result = await createUserProfile(profile)

        expect(result).not.toBeNull()
    })
})
