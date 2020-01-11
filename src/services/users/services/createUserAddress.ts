import { AddressRepository } from "../db/repositories"
import { CreateUserAddressRequestModel } from "../model"

const makeCreateUserAddress = (addressRepository: AddressRepository) => async (data: CreateUserAddressRequestModel): Promise<any> => {
    const { id } = await addressRepository.create(data)

    if(id) {
        return { id }
    }

    return null
} 

export { makeCreateUserAddress }