import { CreateUserLocalCredentialsModel } from "../model"
import { NotUniqueDbError } from "../../../logic/errors"

class UserLocalCredentialsRepository {
    readonly client: any

    constructor(knex: any) {
        this.client = knex('user_local_credentials')
    }

    async create(credentials: CreateUserLocalCredentialsModel): Promise<{ id: number }> {
        try {

            const [ id ] = await this.client.insert(credentials).returning('id')
    
            return { id: id }
        }
        catch(error) {
            if(error.code == '23505') {
                throw new NotUniqueDbError('Email já registrado', { errors: { email: ['Email já registrado']}})
            }
            else {
                throw error
            }
        }
    }

    async findByEmail(email: string): Promise<{ id: number, password: string, user_profile_id: number}|null> {
        const userCredentials = await this.client.where('email', email).select('id', 'password', 'user_profile_id').first()

        if(userCredentials) {
            return userCredentials
        }
        return null
    }
}

export { UserLocalCredentialsRepository }