import { CreateUserLocalCredentialsModel } from "../model"

class UserLocalCredentialsRepository {
    readonly client: any

    constructor(knex: any) {
        this.client = knex('user_local_credentials')
    }

    async create(credentials: CreateUserLocalCredentialsModel): Promise<{ id: number }> {
        const [ id ] = await this.client.insert(credentials).returning('id')

        return { id: id }
    }
}

export { UserLocalCredentialsRepository }