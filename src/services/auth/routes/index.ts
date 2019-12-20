import { Router } from 'express'
import { signInRequest, signUpRequest } from '../request_handlers'

const router = Router()

router.post('/sign-in', signInRequest)
router.post('/sign-up', signUpRequest)

router.post('/recovery')

export default router;