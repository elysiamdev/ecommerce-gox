import { IHttpExpress } from "../../../logic/interfaces"
import knex from "@database/index"
import { ProductsRepository } from "@services/products/db/ProductsRepository"
import { makeFindUserAddresses } from "@services/users/services/findUserAddresses"
import { AddressRepository } from "@services/users/db/repositories"

export const homeHandler = (req: any, res: any, next: any) => {
    const sharedData = JSON.stringify({
        "slides": [
            {
                title: "Slider 1", products: [
                    { title: 'Produto 1', url: '/site/produto/produto-1', image: undefined, price: 12.01 },
                    { title: 'Produto 2', url: '/site/produto/produto-2', image: undefined, price: 14.01 },
                    { title: 'Produto 3', url: '/site/produto/produto-3', image: undefined, price: 16.01 },
                    { title: 'Produto 4', url: '/site/produto/produto-4', image: undefined, price: 16.01 },
                    { title: 'Produto 5', url: '/site/produto/produto-5', image: undefined, price: 16.01 },
                    { title: 'Produto 6', url: '/site/produto/produto-6', image: undefined, price: 16.01 },
                ]
            },
            {
                title: "Slider 2", products: [
                    { title: 'Produto 7', url: '/site/produto/produto-7', image: undefined, price: 16.01 },
                    { title: 'Produto 8', url: '/site/produto/produto-8', image: undefined, price: 16.01 },
                    { title: 'Produto 9', url: '/site/produto/produto-9', image: undefined, price: 16.01 },
                    { title: 'Produto 10', url: '/site/produto/produto-10', image: undefined, price: 16.01 },
                    { title: 'Produto 11', url: '/site/produto/produto-11', image: undefined, price: 16.01 },
                    { title: 'Produto 12', url: '/site/produto/produto-12', image: undefined, price: 16.01 },
                ]
            }
        ],
        "cart": {
            "products": [
                { id: 1, title: 'Produto 1', url: '/site/produto/produto-1', image: undefined, price: 12.01, quantity: 1 },
            ]
        },
        "slides_wide": {
        "cart": {
            "products": [
                { id: 1, title: 'Produto 1', url: '/produto/produto-1', image: undefined, price: 12.01, quantity: 1 },
        ]},
        "slides_wide": { 
            title: "Slider wide", products: [
                { id: 1, title: "Slider wide item 1", isNew: true, sale: false, image: undefined, url: "/url", oldPrice: 10.01, newPrice: 15.01, description: "A product 1" },
                { id: 2, title: "Slider wide item 2", isNew: false, sale: -30, image: undefined, url: "/url-1", oldPrice: 11.01, newPrice: 16.01, description: "A product 2" },
                { id: 3, title: "Slider wide item 3", isNew: true, sale: false, image: undefined, url: "/url-2", oldPrice: 12.01, newPrice: 17.01, description: "A product 3" },
                { id: 4, title: "Slider wide item 4", isNew: true, sale: false, image: undefined, url: "/url-3", oldPrice: 13.01, newPrice: 18.01, description: "A product 4" },
                { id: 5, title: "Slider wide item 5", isNew: true, sale: false, image: undefined, url: "/url-4", oldPrice: 14.01, newPrice: 19.01, description: "A product 5" },
                { id: 6, title: "Slider wide item 6", isNew: true, sale: false, image: undefined, url: "/url-5", oldPrice: 15.01, newPrice: 20.01, description: "A product 6" },
            ]
        },
        "deals": {
            "dealsx": {
                title: "Deals title", products: [
                    { id: 1, title: "Deals product 1", sale: false, image: undefined, url: "/url-1", oldPrice: 15.01, newPrice: 20.01, description: "A product 1" },
                    { id: 2, title: "Deals product 2", sale: -20, image: undefined, url: "/url-2", oldPrice: 16.01, newPrice: 20.02, description: "A product 2" },
                    { id: 3, title: "Deals product 3", sale: false, image: undefined, url: "/url-3", oldPrice: 17.01, newPrice: 20.03, description: "A product 3" },
                ]
            }
        }
    })

    res.render('site/home', { sharedData: sharedData })
}

export const productHandler = (req: any, res: any, next: any) => {
    const sharedData = JSON.stringify({
        "cart": {
            "products": [
                { id: 1, title: 'Produto 1', url: '/site/produto/produto-1', image: undefined, price: 12.01, quantity: 1 },
            ]
        },
        "product": {
            id: 1, title: 'Produto 1', url: '/produto/produto-1', image: undefined, price: 12.01, quantity: 1 
        },
        "related_products": {
            title: "Deals title", products: [
                { id: 1, title: "Deals product 1", sale: false, image: undefined, url: "/url-1", oldPrice: 15.01, newPrice: 20.01, description: "A product 1" },
                { id: 2, title: "Deals product 2", sale: -20, image: undefined, url: "/url-2", oldPrice: 16.01, newPrice: 20.02, description: "A product 2" },
                { id: 3, title: "Deals product 3", sale: false, image: undefined, url: "/url-3", oldPrice: 17.01, newPrice: 20.03, description: "A product 3" },
            ]
        }
    })

    res.render('site/product', { sharedData: sharedData })
}

export const contactHandler: IHttpExpress = (req: any, res: any, next: any) => {
    res.render('site/contact')
}

export const searchHandler = (req: any, res: any, next: any) => {
    const { term } = req.query
    const repository = new ProductsRepository(knex)

    repository.search(term)
        .then(result => {
            const products = result.map(p => ({ ...p, sale: false, newPrice: p.sell_value, title: p.name, isNew: false }))
            res.render('site/search', { sharedData: JSON.stringify({ search_result: products }) })
        })
}

export const loginHandler = (req: any, res: any, next: any) => {
    res.render('site/login')
}

export const registerHandler = (req: any, res: any, next: any) => {
    res.render('site/register')
}

export const register2Handler = async (req: any, res: any, next: any) => {
    const unitOfWork = new UnitOfWork(knex)
    await unitOfWork.initialize()

    const registerRequestModel = mapRegisterRequestBodyIntoRegisterRequestModel(req.body)
    const createUserProfile = makeCreateUserProfile(unitOfWork.getUserProfileRepository())
    const createUserCredentials = makeCreateUserLocalCredentials(unitOfWork.getUserLocalCredentialsRepository(), hashPassword)
    const registerUser = makeRegisterUser(createUserProfile, createUserCredentials)

    const user = await registerUser(registerRequestModel)

    if (user) {
        unitOfWork.commit()
        res.status(201).send(user)
    }
    else {
        unitOfWork.rollback()
        next(new Error('Idk yet'))
    }
}

export const orderHistoryHandler = (req: any, res: any, next: any) => {
    res.render('site/order_history')
}

export const orderInfoHandler = async (req: any, res: any, next: any) => {
    res.render('site/order_info')
}

export const customerInfoHandler = (req: any, res: any, next: any) => {
    res.render('site/customer_info')
}

export const adminHandler = (req: any, res: any, next: any) => res.render('admin/home', { layout: 'admin', isDev: process.env.NODE_ENV === 'dev' })
