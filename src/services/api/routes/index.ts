import { Router } from 'express'
import { registerHandler, createAddressHandler, deleteAddressHandler } from '@services/users/request_handlers'
import { protectHandler } from '@services/auth/middlewares/protectHandler'
import { checkoutHandler } from '@services/checkout/request_handlers'

const router = Router()

router.post('/v1/register', registerHandler)
router.post('/v1/addresses', protectHandler, createAddressHandler)
router.delete('/v1/addresses/:id', protectHandler, deleteAddressHandler)

router.post('/v1/checkout', checkoutHandler)

export default router