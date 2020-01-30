import cookieParser from 'cookie-parser'
import { Application } from 'express'

export default (app: Application) => {
    app.use(cookieParser())
}