import { IHttpExpress } from "../../../logic/interfaces"

export const homeHandler: IHttpExpress = (req: any, res: any, next: any) => {
    res.render('site/home')
}

export const productHandler: IHttpExpress = (req: any, res: any, next: any) => {
    res.render('site/product')
}

export const contactHandler: IHttpExpress = (req: any, res: any, next: any) => {
    res.render('site/contact')
}