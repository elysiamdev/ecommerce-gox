import { CreateUserProfileModel } from "../model"
import { NotUniqueDbError } from "../../../logic/errors"

class UserProfileRepository {
    readonly client: any

    constructor(knex: any) {
        this.client = knex
    }

    async create(profile: CreateUserProfileModel): Promise<{ id: number }> {
        try {
            const [ id ] = await this.client('users_profiles').insert(profile).returning('id')
            return { id: id }
        }
        catch(error) {
            if(error.code == '23505') {
                throw new NotUniqueDbError('CPF já registrado', { errors: { cpf: ['CPF já registrado']}})
            }
            else {
                throw error
            }
        }
    }

    async findById(id: number): Promise<{id: number, fullname: string }> {
        return await this.client('users_profiles').where('id', id).select(['id', 'fullname']).first()
    }
}

export { UserProfileRepository }