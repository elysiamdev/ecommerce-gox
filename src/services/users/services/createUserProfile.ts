import { UserProfileRepository } from "../db/repositories"
import { RegisterRequestModel } from "../model"

const makeCreateUserProfile = 
    (userProfileRepository: UserProfileRepository) => 
        async (userProfile: RegisterRequestModel): Promise<{ id: number, fullname: string, created_at: Date }|null> => {
            const { fullname } = userProfile
            const created_at = new Date()
            const { id } = await userProfileRepository.create({ fullname, created_at })

            if(id) {
                return { id, fullname, created_at }
            }

            return null
        } 

export { makeCreateUserProfile }