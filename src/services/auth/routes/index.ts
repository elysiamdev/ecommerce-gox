import { Router, Request, Response } from 'express'
import services from '../services'
import { signInRequest, signUpRequest } from '../request_handlers'

const router = Router()

router.post('/sign-in', signInRequest)
router.post('/sign-up', signUpRequest)

export { services };

export default router;