import express from 'express'

import { 
    homeHandler, 
    productHandler, 
    contactHandler, 
    searchHandler, 
    loginHandler, 
    registerHandler,
    orderHistoryHandler,
    orderInfoHandler,
    cartHandler,
    checkoutHandler
 } from '../request_handlers'
import { localCredentialsAuthenticationHandler } from '@services/auth/request_handlers'

const router = express.Router()

router.get('/', homeHandler)
router.get('/produto/:slug', productHandler)
router.get('/contato', contactHandler)
router.get('/busca', searchHandler)

router.get('/login', loginHandler)

router.post('/login', localCredentialsAuthenticationHandler)

router.get('/carrinho', cartHandler)
router.get('/registrar', registerHandler)
router.get('/pedidos', orderHistoryHandler)
router.get('/pedidos/:slug', orderInfoHandler)

router.get('/finalizar-pedido', checkoutHandler)

export default router