import passport from '@services/auth/passport'

const localCredentialsAuthenticationHandler = (req: any, res: any, next: any) => { 
    passport.authenticate('local', function (error, user, info) {
        if(error) return next(error)

        if(!user) return res.render('site/login', { error: info })

        req.logIn(user, (e: any) => {
            if(e) next(e)

            return res.redirect('/minha-conta')
        })
    })(req, res, next)
}

export { localCredentialsAuthenticationHandler }