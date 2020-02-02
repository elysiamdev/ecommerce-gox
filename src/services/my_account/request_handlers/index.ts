import { makeFindUserProfileById } from "@services/users/services/findUserProfileById"
import { UserProfileRepository, AddressRepository } from "@services/users/db/repositories"
import knex from "@database/index"
import { makeFindUserAddresses } from "@services/users/services/findUserAddresses"
import useCart from "@services/cart/middleware/useCart"
import { SharedData } from "@logic/SharedData"

export const customerInfoHandler = useCart(async (req: any, res: any, next: any) => {
    const sd = new SharedData()
    sd.add("cart", { products: req.user_cart.items })

    const findUserProfileById = makeFindUserProfileById(new UserProfileRepository(knex))
    const profile = await findUserProfileById(req.user.id)
    
    res.render('my_account/home/index', { profile, sharedData: sd.toJson() })
})

export const listAddressesHandler = useCart(async (req: any, res: any, next: any) => {
    const findUserAddresses = makeFindUserAddresses(new AddressRepository(knex))
    const userId = req.user.id
    const addresses = await findUserAddresses(userId)

    const sd = new SharedData()
    sd.add("cart", { products: req.user_cart.items })
    sd.add("addresses", addresses)

    res.render('my_account/addresses/index', { sharedData: sd.toJson() })
})

export const newAddressesHandler = useCart(async (req: any, res: any, next: any) => {
    const sd = new SharedData()
    sd.add("cart", { products: req.user_cart.items })

    res.render('my_account/addresses/new', { addresses: [], sharedData: sd.toJson() })
})