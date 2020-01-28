import { makeFindUserProfileById } from "@services/users/services/findUserProfileById"
import { UserProfileRepository, AddressRepository } from "@services/users/db/repositories"
import knex from "@database/index"
import { makeFindUserAddresses } from "@services/users/services/findUserAddresses"

export const customerInfoHandler = async (req: any, res: any, next: any) => {
    const findUserProfileById = makeFindUserProfileById(new UserProfileRepository(knex))
    const profile = await findUserProfileById(req.user.id)
    
    res.render('my_account/home/index', { profile })
}

export const listAddressesHandler = async (req: any, res: any, next: any) => {
    const findUserAddresses = makeFindUserAddresses(new AddressRepository(knex))
    const userId = req.user.id
    const addresses = await findUserAddresses(userId)

    res.render('my_account/addresses/index', { sharedData: JSON.stringify({addresses: addresses}) })
}

export const newAddressesHandler = async (req: any, res: any, next: any) => {
    res.render('my_account/addresses/new', { addresses: []})
}
