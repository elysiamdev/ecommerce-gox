interface CreateUserAddressModel {
    readonly address_1: string
    readonly address_2: string
    readonly city: string
    readonly state: string
    readonly postal_code: string
    readonly country: string
    readonly created_at: Date
    readonly address_type_id: number
    readonly user_profile_id: number
}

export { CreateUserAddressModel }