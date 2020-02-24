import express from 'express'

import { 
    customerInfoHandler, 
    listAddressesHandler, 
    newAddressesHandler,
 } from '../request_handlers'
import { protectHandler } from '../../auth/middlewares/protectHandler'
import { logoutHandler } from '../../auth/request_handlers'

const router = express.Router()

router.use((req: any, res: any, next: any) => {
    if(req.user) {
        res.locals.isAuthenticated = true
    }
    next()
})
router.get('/', protectHandler, customerInfoHandler)
router.get('/enderecos', protectHandler, listAddressesHandler)
router.get('/enderecos/novo', protectHandler, newAddressesHandler)
router.get('/logout', logoutHandler)

export default router