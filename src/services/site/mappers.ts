import { RegisterRequestModel } from "../site/models"
import { CreateUserAddressRequestModel } from "../users/model"

const mapRequestBodyIntoRegisterRequestModel = (requestBody: any): RegisterRequestModel => {
    const { fullname, cpf, email, telephone, password, confirm, newsletter, agreed } = requestBody

    return { fullname, cpf, email, telephone, password, confirm, newsletter, agreed }
}

const mapRequestBodyIntoCreateUserAddressRequestModel = (requestBody: any): CreateUserAddressRequestModel => {
    const { name, street, number, complement, city, state, postal_code, country } = requestBody

    return { name, street, number, complement, city, state, postal_code, country }
}

export { mapRequestBodyIntoRegisterRequestModel, mapRequestBodyIntoCreateUserAddressRequestModel }