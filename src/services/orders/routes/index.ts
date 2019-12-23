import { Router } from 'express'
import { getOrdersRequest, getOrderRequest, updateOrderRequest, deleteOrderRequest, insertOrderRequest } from '../request_handlers'
let router = Router()

router.get('', getOrdersRequest)
router.get('/:id', getOrderRequest)
router.put('/', updateOrderRequest)
router.post('/', insertOrderRequest)
router.delete('/', deleteOrderRequest)

export default router;