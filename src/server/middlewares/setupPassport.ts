import passport from '../../services/auth/passport'
import { Application } from 'express'

export default (app: Application) => {
    app.use(passport.initialize())
    app.use(passport.session())
}