import express from 'express'
import passport from '@services/auth/passport'

import { 
    homeHandler, 
    productHandler, 
    contactHandler, 
    searchHandler, 
    loginHandler, 
    registerHandler,
    orderHistoryHandler,
    orderInfoHandler
 } from '../request_handlers'

const router = express.Router()

router.get('/', homeHandler)
router.get('/produto/:slug', productHandler)
router.get('/contato', contactHandler)
router.get('/busca', searchHandler)

router.get('/login', loginHandler)

router.post('/login', (req: any, res: any, next) => { 
    passport.authenticate('local', function (error, user, info) {
        if(error) return next(error)

        if(!user) return res.render('site/login', { error: info })

        req.logIn(user, (e: any) => {
            if(e) next(e)

            return res.redirect('/minha-conta')
        })
    })(req, res, next)
})

router.get('/registrar', registerHandler)
router.get('/pedidos', orderHistoryHandler)
router.get('/pedidos/:slug', orderInfoHandler)

export default router