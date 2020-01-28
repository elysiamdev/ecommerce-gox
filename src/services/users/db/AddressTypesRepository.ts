class AddressTypesRepository {
    readonly client: any

    constructor(knex: any) {
        this.client = knex
    }

    async exists(id: number): Promise<boolean> {
        const exists = await this.client.where('id', id).select('id').first()

        if(exists) {
            return true
        }

        return false
    }
}

export { AddressTypesRepository }