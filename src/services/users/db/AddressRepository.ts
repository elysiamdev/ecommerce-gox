import { CreateUserAddressModel } from "../model"

class AddressRepository {
    readonly client: any

    constructor(knex: any) {
        this.client = knex
    }

    async create(address: CreateUserAddressModel): Promise<{ id: number }> {
        const result = await this.client.insert(address)

        return { id: 1 }
    }
}

export { AddressRepository }