import express from 'express'
import { listTotem, readTotem, createTotem } from '../request_handlers'

const router = express.Router()

router.get('/', listTotem)
router.get('/:id', readTotem)
router.post('/', createTotem)

export default router;