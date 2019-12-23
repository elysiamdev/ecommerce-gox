import { Router } from 'express'
import { signInRequest, signUpRequest } from '../request_handlers'

const router = Router()

router.post('/sign-in', signInRequest)
router.post('/sign-up', signUpRequest)


// todo
router.post('/recovery', (req, res) => res.send('recovery request'))

export default router;