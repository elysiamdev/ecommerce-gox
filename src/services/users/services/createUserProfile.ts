import { UserProfileRepository } from '../db/repositories'
import { InputValidationError } from '@logic/errors'
import { validateProfile } from '../providers/validator'

const ensureValidProfile = (profile: { fullname: string }) => {
    const validationResult = validateProfile(profile)

    if(!validationResult.isValid) {
        throw new InputValidationError('InputValidationError', { errors: validationResult.errors })
    }
}

const makeCreateUserProfile = 
    (userProfileRepository: UserProfileRepository) => 
        async (userProfile: { fullname: string }): Promise<{ id: number, fullname: string, created_at: Date }|null> => {
            ensureValidProfile(userProfile)
            
            const { fullname } = userProfile
            const created_at = new Date()
            const { id } = await userProfileRepository.create({ fullname, created_at })

            if(id) {
                return { id, fullname, created_at }
            }

            return null
        } 

export { makeCreateUserProfile }