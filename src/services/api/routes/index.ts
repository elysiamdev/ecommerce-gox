import { Router } from 'express'
import { registerHandler, createAddressHandler, deleteAddressHandler } from '@services/users/request_handlers'
import { protectHandler } from '@services/auth/middlewares/protectHandler'
import { checkoutHandler } from '@services/checkout/request_handlers'
import { addToCartHandler, removeProductFromCartHandler, updateProductQuantityHandler } from '@services/cart/request_handlers'
import { calculateShippingCostHandler } from '@services/shipping/request_handlers'

const router = Router()

router.post('/v1/register', registerHandler)
router.post('/v1/addresses', protectHandler, createAddressHandler)
router.delete('/v1/addresses/:id', protectHandler, deleteAddressHandler)
router.post('/v1/cart', addToCartHandler)
router.delete('/v1/cart/:id', removeProductFromCartHandler)
router.post('/v1/cart/product/:id', updateProductQuantityHandler)
router.post('/v1/checkout', checkoutHandler)

router.get('/v1/checkout/shipping', calculateShippingCostHandler)

export default router