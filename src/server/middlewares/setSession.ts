import session from 'express-session'
import { Application } from 'express'

export default (app: Application) => {
    const SECRET = process.env.COOKIE_SECRET || 'secure'

    app.use(session({ secret: SECRET, resave: false, saveUninitialized: false }))
}