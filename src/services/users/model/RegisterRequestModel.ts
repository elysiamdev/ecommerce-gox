interface RegisterRequestModel {
    readonly fullname: string
    readonly email: string
    readonly telephone: string
    readonly password: string
    readonly confirm: string,
    readonly newsletter: number
}

export { RegisterRequestModel }