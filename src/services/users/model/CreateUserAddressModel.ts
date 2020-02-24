interface CreateUserAddressModel {
    readonly name: string
    readonly street: string
    readonly number: string
    readonly city: string
    readonly state: string
    readonly postal_code: string
    readonly country: string
    readonly user_profile_id: number
}

export { CreateUserAddressModel }