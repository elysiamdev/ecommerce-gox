import { AddressRepository } from "../db/repositories"
import { CreateUserAddressRequestModel, CreateUserAddressModel } from "../model"
import { validateUserAddress } from "../providers/validator"
import { InputValidationError } from "@logic/errors"

const ensureValid = (address: CreateUserAddressRequestModel) => {
    const { isValid, errors } = validateUserAddress(address)

    if(!isValid) {
        throw new InputValidationError('Invalid address', { errors })
    }
}

const makeCreateUserAddress = 
    (addressRepository: AddressRepository) => 
        async (data: CreateUserAddressRequestModel, userId: number): Promise<any> => {
            ensureValid(data)
            const createUserAddressModel = { ...data, user_profile_id: userId }

            const { id } = await addressRepository.create(createUserAddressModel)

            return { id }
        } 

export { makeCreateUserAddress }