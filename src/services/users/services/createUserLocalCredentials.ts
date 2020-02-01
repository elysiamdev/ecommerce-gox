import { UserLocalCredentialsRepository } from "../db/repositories"
import { validateLocalCredentials } from "../providers/validator"
import { InputValidationError } from "@logic/errors"

const ensureValidLocalCredentials = (credentials: { email: string, password: string, confirm: string }) => {
    const validationResult = validateLocalCredentials(credentials)

    if(!validationResult.isValid) {
        throw new InputValidationError('InputValidationError', { errors: validationResult.errors })
    }
}

const makeCreateUserLocalCredentials = 
    (userLocalCredentialsRepository: UserLocalCredentialsRepository, hashPassword: Function) => 
        async (userCredentials: { email: string, password: string, confirm: string }, profile: { id: number }): Promise<boolean> => {
            ensureValidLocalCredentials(userCredentials)

            const { email, password } = userCredentials

            const user_profile_id = profile.id
        
            const hashedPassword = await hashPassword(password)
            const { id } = await userLocalCredentialsRepository.create({ email, password: hashedPassword, user_profile_id })
        
            if(id) {
                return true
            }
            return false
        } 

export { makeCreateUserLocalCredentials }