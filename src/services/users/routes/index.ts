import { Router } from 'express'
const router = Router()
import { getOne, insertUser } from '../index'

router.get('/', async (req, res) => {
    res.json({ user: 'home page' })
})

router.get('/user/:id', (req, res) => {
    let result = getOne(req.params.id)
    res.json(result)
})

router.post('/user', async (req, res) => {
    let result = await insertUser(req.body)
    return res.json(result)
})
export default router;