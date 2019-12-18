import { Router } from 'express'
const router = Router()
import Actions from '../index'
import ReactDOMServer from 'react-dom/server'

router.get('/react-app', (req, res) => {

})

router.get('/', async (req, res) => {
    res.json({ user: 'home page' })
})

router.get('/user/:id', (req, res) => {
    let result = Actions.getOne(req.params.id)
    res.json(result)
})

router.post('/user', async (req, res) => {
    let result = await Actions.insertOne(req.body)
    return res.json(result)
})
export default router;