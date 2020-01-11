import passport from 'passport'
import { Strategy as LocalStrategy } from 'passport-local'

const validateUserCredentials = (username: any, password: any, done: any) => {}

const localStrategy = new LocalStrategy(validateUserCredentials)

passport.use(localStrategy)

export default passport