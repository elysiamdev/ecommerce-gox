import { Router } from 'express'
import { registerHandler, createAddressHandler, deleteAddressHandler } from '../../users/request_handlers'
import { protectHandler } from '../../auth/middlewares/protectHandler'
import { checkoutHandler } from '../../checkout/request_handlers'
import { addToCartHandler, removeProductFromCartHandler, updateProductQuantityHandler } from '../../cart/request_handlers'
import { calculateShippingCostHandler } from '../../shipping/request_handlers'
import { listAddressesHandler } from '../../users/request_handlers'
import { createOrderHandler } from '../../orders/request_handlers'

const router = Router()

router.post('/v1/register', registerHandler)
router.get('/v1/addresses', protectHandler, listAddressesHandler)
router.post('/v1/addresses', protectHandler, createAddressHandler)
router.delete('/v1/addresses/:id', protectHandler, deleteAddressHandler)
router.post('/v1/cart', addToCartHandler)
router.delete('/v1/cart/:id', removeProductFromCartHandler)
router.post('/v1/cart/product/:id', updateProductQuantityHandler)
router.post('/v1/checkout', checkoutHandler)

router.get('/v1/checkout/shipping', calculateShippingCostHandler)
router.post('/v1/checkout/orders', createOrderHandler)
export default router