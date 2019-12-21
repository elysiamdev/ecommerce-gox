import { Router } from 'express'

let router = Router()


// remove it later 
const tempHanbdler = () => { }


router.get('/products', tempHanbdler)
router.get('/products/:id', tempHanbdler)
router.post('/products/:slug-url', tempHanbdler)

export default router;