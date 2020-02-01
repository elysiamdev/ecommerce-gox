import bcrypt from 'bcrypt'
import { UserLocalCredentialsRepository } from '@services/users/db/repositories'
import knex from '@database/index'

const matchUserPassword = async (password: any, hash: any) => {
    const match = await bcrypt.compare(password, hash)
    return match
}

const validateUserCredentials = async (email: any, password: any, done: any) => {
    try {
        const localCredentialsRepository = new UserLocalCredentialsRepository(knex)

        const credentials = await localCredentialsRepository.findByEmail(email)

        if(!credentials) {
            return done(null, false, { message: 'User not found' })
        }

        const match = await matchUserPassword(password, credentials?.password)

        if(match) {
            return done(null, { id: credentials.user_profile_id })
        }
        return done(null, false, { message: 'Wrong credentials'})
    }
    catch(error) {
        return done(error)
    }
}

export { validateUserCredentials }