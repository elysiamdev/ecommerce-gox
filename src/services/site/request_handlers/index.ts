export const homeHandler = (req: any, res: any, next: any) => {
    res.render('site/home')
}

export const productHandler = (req: any, res: any, next: any) => {
    res.render('site/product')
}

export const contactHandler = (req: any, res: any, next: any) => {
    res.render('site/contact')
}