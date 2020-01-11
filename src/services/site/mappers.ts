import { RegisterRequestModel } from "@services/users/model"

const mapRegisterRequestBodyIntoRegisterRequestModel = (registerRequestBody: any): RegisterRequestModel => {
    const { fullname,email, telephone, password, confirm, newsletter } = registerRequestBody

    return { fullname, email, telephone, password, confirm, newsletter }
}

export { mapRegisterRequestBodyIntoRegisterRequestModel }