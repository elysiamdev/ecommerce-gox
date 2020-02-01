import { UserProfileRepository } from "../db/repositories";

const makeFindUserProfileById = (userProfileRepository: UserProfileRepository) =>
    async (id: number): Promise<{ id: Number, fullname: string }|null> => {
        const profile = await userProfileRepository.findById(id)

        if(profile) {
            return profile
        }
        return null
    }

export { makeFindUserProfileById }