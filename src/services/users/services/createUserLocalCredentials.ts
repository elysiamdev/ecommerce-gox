import { UserLocalCredentialsRepository } from "../db/repositories"
import { RegisterRequestModel } from "../model"

const makeCreateUserLocalCredentials = (userLocalCredentialsRepository: UserLocalCredentialsRepository, hashPassword: Function) => async (userCredentials: RegisterRequestModel, profile: { id: number}): Promise<boolean> => {
    const { email, password, confirm } = userCredentials

    if(password == confirm) {
        const created_at = new Date()
        const user_profile_id = profile.id
    
        const hashedPassword = await hashPassword(password)
        const { id } = await userLocalCredentialsRepository.create({ email, password: hashedPassword, user_profile_id })
    
        if(id) {
            return true
        }
    }
    return false
} 

export { makeCreateUserLocalCredentials }