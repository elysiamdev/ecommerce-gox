interface RegisterRequestModel {
    readonly fullname: string
    readonly email: string
    readonly telephone: string
    readonly password: string
    readonly confirm: string,
    readonly newsletter: boolean,
    readonly agreed: boolean
}

export { RegisterRequestModel }