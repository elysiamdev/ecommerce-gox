import { Router } from 'express'
import {
    getProductsRequest,
    getProductRequest,
    updateProductRequest,
    insertProductRequest,
    deleteProductRequest,
    getBySlugRequest
} from '../request_handlers'

let router = Router()


router.get('', getProductsRequest)
router.get('/:id', getProductRequest)
router.put('/', updateProductRequest)
router.get('/:slugUrl', getBySlugRequest)
router.post('/', insertProductRequest)
router.delete('/', deleteProductRequest)

export default router;