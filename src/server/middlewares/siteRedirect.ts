import { Application } from "express";

export default (app: Application) => {
    app.get('/', (req, res, next) => {
        res.redirect('/site')
        next()
    })

}
