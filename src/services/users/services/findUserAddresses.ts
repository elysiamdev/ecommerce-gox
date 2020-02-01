import { AddressRepository } from "../db/repositories";

const makeFindUserAddresses = (repository: AddressRepository) => async (userId: number) => {
    const addresses = repository.findUserAddresses(userId)

    return addresses
}

export { makeFindUserAddresses }