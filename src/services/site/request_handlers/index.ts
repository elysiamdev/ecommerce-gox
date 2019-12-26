export const homeHandler = (req: any, res: any, next: any) => {
    const sharedData = JSON.stringify({
        "slides": [
            { title: "Slider 1", products: [
                { title: 'Produto 1', url: '/site/produto/produto-1', image: undefined, price: 12.01 },
                { title: 'Produto 2', url: '/site/produto/produto-2', image: undefined, price: 14.01 },
                { title: 'Produto 3', url: '/site/produto/produto-3', image: undefined, price: 16.01 },
                { title: 'Produto 4', url: '/site/produto/produto-4', image: undefined, price: 16.01 },
                { title: 'Produto 5', url: '/site/produto/produto-5', image: undefined, price: 16.01 },
                { title: 'Produto 6', url: '/site/produto/produto-6', image: undefined, price: 16.01 },
            ]},
            { title: "Slider 2", products: [
                { title: 'Produto 7', url: '/site/produto/produto-7', image: undefined, price: 16.01 },
                { title: 'Produto 8', url: '/site/produto/produto-8', image: undefined, price: 16.01 },
                { title: 'Produto 9', url: '/site/produto/produto-9', image: undefined, price: 16.01 },
                { title: 'Produto 10', url: '/site/produto/produto-10', image: undefined, price: 16.01 },
                { title: 'Produto 11', url: '/site/produto/produto-11', image: undefined, price: 16.01 },
                { title: 'Produto 12', url: '/site/produto/produto-12', image: undefined, price: 16.01 },
            ]}
    ]})

    res.render('site/home', { sharedData: sharedData })
}

export const productHandler = (req: any, res: any, next: any) => {
    res.render('site/product')
}

export const contactHandler = (req: any, res: any, next: any) => {
    res.render('site/contact')
}

export const searchHandler = (req: any, res: any, next: any) => {
    res.render('site/search')
}

export const loginHandler = (req: any, res: any, next: any) => {
    res.render('site/login')
}

export const registerHandler = (req: any, res: any, next: any) => {
    res.render('site/register')
}

export const orderHistoryHandler = (req: any, res: any, next: any) => {
    res.render('site/order_history')
}

export const orderInfoHandler = (req: any, res: any, next: any) => {
    res.render('site/order_info')
}

export const customerInfoHandler = (req: any, res: any, next: any) => {
    res.render('site/customer_info')
}