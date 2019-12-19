import express from 'express'
import { homeHandler, productHandler, contactHandler } from '../request_handlers'

const router = express.Router()

router.get('/', homeHandler)
router.get('/produto/:slug', productHandler)
router.get('/contato', contactHandler)

export default router