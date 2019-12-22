import { Router } from 'express'
import { getProductsRequest, getProductRequest, updateProductRequest } from '../request_handlers'
let router = Router()


// remove it later 
const tempHanbdler = () => { }


router.get('', getProductsRequest)
router.get('/:id', getProductRequest)
router.put('/', updateProductRequest)
router.post('/:slug-url', tempHanbdler)

export default router;