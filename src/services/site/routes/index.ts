import express from 'express'
import { homeHandler, productHandler, contactHandler, searchHandler } from '../request_handlers'

const router = express.Router()

router.get('/', homeHandler)
router.get('/produto/:slug', productHandler)
router.get('/contato', contactHandler)
router.get('/busca', searchHandler)

export default router