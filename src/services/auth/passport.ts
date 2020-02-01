import passport from 'passport'
import { Strategy as LocalStrategy } from 'passport-local'
import { validateUserCredentials } from './services';

const localStrategyOptions = {
    usernameField: 'email'
}

passport.serializeUser(function(user: { id: number }, done) {
    return done(null, user.id);
})

passport.deserializeUser(function(user_id: number, done) {
    return done(null, { id: user_id })
})

const localStrategy = new LocalStrategy(localStrategyOptions, validateUserCredentials)

passport.use(localStrategy)

export default passport