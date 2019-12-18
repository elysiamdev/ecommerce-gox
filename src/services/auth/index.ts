import { Router, Request, Response } from 'express'
import services from './services'

const router = Router()

router.get('/', (req: Request, res: Response) => res.json({ data: '' }))

export { services };

export default router;