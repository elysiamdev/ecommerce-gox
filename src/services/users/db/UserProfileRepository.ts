import { CreateUserProfileModel } from "../model"

class UserProfileRepository {
    readonly client: any

    constructor(knex: any) {
        this.client = knex('users_profiles')
    }

    async create(profile: CreateUserProfileModel): Promise<{ id: number }> {
        const [ id ] = await this.client.insert(profile).returning('id')
        return { id: id }
    }

    async findById(id: number): Promise<{id: number, fullname: string }> {
        return await this.client.where('id', id).select(['id', 'fullname']).first()
    }
}

export { UserProfileRepository }