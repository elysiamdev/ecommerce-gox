import express from 'express'

import { 
    customerInfoHandler, listAddressesHandler, newAddressesHandler,
 } from '../request_handlers'
import { protectHandler } from '@services/auth/middlewares/protectHandler'

const router = express.Router()

router.get('/', protectHandler, customerInfoHandler)
router.get('/enderecos', protectHandler, listAddressesHandler)
router.get('/enderecos/novo', protectHandler, newAddressesHandler)

export default router