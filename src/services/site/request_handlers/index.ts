import knex from "../../../server/db/index"
import { ProductsRepository } from "../../products/db/ProductsRepository"
import { makeFindUserAddresses } from "../../users/services/findUserAddresses"
import { AddressRepository } from "../../users/db/repositories"
import { SharedData } from "../../../logic/SharedData"
import { getBySlugService as getProductBySlug, getAllService as getAllProducts } from "../../products/services"
import { NotFoundError } from "../../../logic/errors"
import useCart from "../../cart/middleware/useCart"

export const homeHandler = useCart(async (req: any, res: any, next: any) => {
    const sd = new SharedData()
    const cartProducts = { "products": req.user_cart.items }
    const { success, data } = await getAllProducts()
    const dealsx = { "dealsx": { 
        title: "Deals title", products: data
        }
    }
    sd.add('cart', cartProducts)
    sd.add('deals', dealsx)
        
    res.render('site/home', { sharedData: sd.toJson() })
})

export const productHandler = useCart(async (req: any, res: any, next: any) => {
    const { slug } = req.params
    const sd = new SharedData()
    const result = await getProductBySlug(slug.trim())

    if(result.success == 0) {
        return next(new NotFoundError('Página não encontrada', { product_slug: slug }))
    }

    const product = result.data
    sd.add("cart", { products: req.user_cart.items })
    sd.add("product", product)
    sd.add("related_products", { title: "Not Implemented", products: []})

    res.render('site/product', { sharedData: sd.toJson(), product })
})

export const contactHandler = useCart((req: any, res: any, next: any) => {
    const sd = new SharedData()
    sd.add("cart", { products: req.user_cart.items })

    res.render('site/contact', { sharedData: sd.toJson() })
})

export const searchHandler = useCart((req: any, res: any, next: any) => {
    const { term } = req.query
    const repository = new ProductsRepository(knex)
    const sd = new SharedData()
    sd.add("cart", { products: req.user_cart.items })

    repository.search(term)
        .then(result => {
            const products = result.map(p => ({ ...p, sale: false, newPrice: p.sell_value, title: p.name, isNew: false }))
            sd.add("search_result", products)

            res.render('site/search', { sharedData: sd.toJson() })
        })
})

export const loginHandler = useCart((req: any, res: any, next: any) => {
    const sd = new SharedData()
    sd.add("cart", { products: req.user_cart.items })
    const actionUrl = ['/login', '/login?checkout=true'].includes(req.originalUrl)? req.originalUrl : '/login'

    res.render('site/login', { sharedData: sd.toJson(), actionUrl })
})

export const registerHandler = useCart((req: any, res: any, next: any) => {
    const sd = new SharedData()
    sd.add("cart", { products: req.user_cart.items })

    res.render('site/register', { sharedData: sd.toJson() })
})

export const orderHistoryHandler = useCart((req: any, res: any, next: any) => {
    const sd = new SharedData()
    sd.add("cart", { products: req.user_cart.items })

    res.render('site/order_history', { sharedData: sd.toJson() })
})

export const orderInfoHandler = useCart(async (req: any, res: any, next: any) => {
    const sd = new SharedData()
    sd.add("cart", { products: req.user_cart.items })

    res.render('site/order_info', { sharedData: sd.toJson() })
})

export const cartHandler = useCart(async (req: any, res: any, next: any) => {
    const sd = new SharedData()
    sd.add("cart", { products: req.user_cart.items })

    res.render('site/view_cart', { sharedData: sd.toJson() })
})

export const checkoutHandler = useCart(async (req: any, res: any, next: any) => {
    const isLoggedIn = req.user? true : false

    if(!isLoggedIn) {
        return res.redirect('/login?checkout=true')
    }

    if(req.user_cart.items.length === 0) {
        return res.redirect('/carrinho')
    }
    
    const findUserAddresses = makeFindUserAddresses(new AddressRepository(knex))
    const sd = new SharedData()
    const userAddresses = isLoggedIn? await findUserAddresses(req.user.id) : []
    sd.add("cart", { products: req.user_cart.items })
    sd.add("checkout_form", {
        data: { 
            user_addresses: userAddresses
        },
        current_step: userAddresses.length > 0? 'CHECKOUT_SELECT_SHIPPING_ADDRESS_STEP' : 'CHECKOUT_CREATE_SHIPPING_ADDRESS_STEP',
    })

    res.render('site/checkout', { sharedData: sd.toJson() })
})