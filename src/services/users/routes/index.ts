import { Router } from 'express'
const router = Router()

import {
    inserUserRequest,
    getUserRequest,
    updateUserRequest,
    deleteUserRequest,
    getUsersRequest
} from '../request_handler'


router.get('/', getUsersRequest)
router.get('/:id', getUserRequest)
router.post('/', inserUserRequest)
router.put('/', updateUserRequest)
router.delete('/', deleteUserRequest)

export default router;