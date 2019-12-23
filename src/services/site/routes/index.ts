import express from 'express'
import { 
    homeHandler, 
    productHandler, 
    contactHandler, 
    searchHandler, 
    loginHandler, 
    registerHandler,
    orderHistoryHandler,
    customerInfoHandler,
    orderInfoHandler
 } from '../request_handlers'

const router = express.Router()

router.get('/', homeHandler)
router.get('/produto/:slug', productHandler)
router.get('/contato', contactHandler)
router.get('/busca', searchHandler)

router.get('/login', loginHandler)
router.get('/registrar', registerHandler)

router.get('/pedidos', orderHistoryHandler)
router.get('/pedidos/:slug', orderInfoHandler)
router.get('/customer-info', customerInfoHandler)

export default router