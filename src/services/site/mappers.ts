import { RegisterRequestModel } from "@services/site/models"
import { CreateUserAddressRequestModel } from "@services/users/model"

const mapRequestBodyIntoRegisterRequestModel = (requestBody: any): RegisterRequestModel => {
    const { fullname,email, telephone, password, confirm, newsletter, agreed } = requestBody

    return { fullname, email, telephone, password, confirm, newsletter, agreed }
}

const mapRequestBodyIntoCreateUserAddressRequestModel = (requestBody: any): CreateUserAddressRequestModel => {
    const { name, street, number, complement, city, state, postal_code, country, address_type_id } = requestBody

    return { name, street, number, complement, city, state, postal_code, country, address_type_id }
}

export { mapRequestBodyIntoRegisterRequestModel, mapRequestBodyIntoCreateUserAddressRequestModel }