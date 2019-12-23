export const homeHandler = (req: any, res: any, next: any) => {
    res.render('site/home')
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