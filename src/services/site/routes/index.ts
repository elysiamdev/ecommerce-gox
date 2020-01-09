import express from 'express'
import passport from '../../../server/middlewares/setupPassport'

import { 
    homeHandler, 
    productHandler, 
    contactHandler, 
    searchHandler, 
    loginHandler, 
    registerHandler,
    register2Handler,
    orderHistoryHandler,
    customerInfoHandler,
    orderInfoHandler
 } from '../request_handlers'

const authHandler = (req: any, res: any, next: any) => {
    res.redirect('/site/home')
}

const router = express.Router()

router.get('/', homeHandler)
router.get('/produto/:slug', productHandler)
router.get('/contato', contactHandler)
router.get('/busca', searchHandler)

router.get('/login', loginHandler)
router.post('/login', passport.authenticate('local'), authHandler)
router.get('/registrar', registerHandler)
router.post('/registrar', register2Handler)
router.get('/pedidos', orderHistoryHandler)
router.get('/pedidos/:slug', orderInfoHandler)
router.get('/customer-info', customerInfoHandler)

export default router