import { Router } from 'express'
import { getDataRequestHandler, inserRequestHandler, signRequestHandler } from '../request_handlers'
let router = Router()


router.get('/site-data', getDataRequestHandler)
router.post('/site-data', inserRequestHandler)
router.post('/sign-in', signRequestHandler)

export default router;