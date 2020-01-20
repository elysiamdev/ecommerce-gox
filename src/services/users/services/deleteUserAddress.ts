import { AddressRepository } from "../db/repositories";

const makeDeleteUserAddress = 
    (repository: AddressRepository) => 
        async ( userId: number, addressId: number ): Promise<boolean> => {
            const deleted = await repository.delete(addressId, userId)

            return deleted
    }

export { makeDeleteUserAddress }