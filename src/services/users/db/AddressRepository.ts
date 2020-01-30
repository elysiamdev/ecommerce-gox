import { CreateUserAddressModel } from "../model"

class AddressRepository {
    readonly client: any

    constructor(knex: any) {
        this.client = knex('addresses')
    }

    async findUserAddresses(userId: number): Promise<Array<{id: number, name: string, street: string, number: string, complement: string, postal_code: string, city: string, state: string, country: string}>> {
        const addresses = await this.client
            .where('user_profile_id', userId)
            .select('id', 'name', 'street', 'number', 'complement', 'postal_code', 'city', 'state', 'country')
            .orderBy('created_at')

        return addresses
    }

    async create(userAddressModel: CreateUserAddressModel): Promise<{ id: number }> {
        const [id] = await this.client.insert(userAddressModel).returning('id')

        return { id: id }
    }

    async delete(userId: number, addressId: number): Promise<boolean> {
        const result = await this.client.where('id', addressId).andWhere('user_profile_id', userId).del()

        if(result === 1) {
            return true
        }
        return false
    }
}

export { AddressRepository }