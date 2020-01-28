interface CreateUserAddressRequestModel {
    readonly name: string
    readonly street: string
    readonly number: string
    readonly complement: string
    readonly city: string
    readonly state: string
    readonly postal_code: string
    readonly country: string
    readonly address_type_id: number
}

export { CreateUserAddressRequestModel }