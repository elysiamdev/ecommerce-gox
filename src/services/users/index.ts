import { TUser, TUsers } from './providers/types'
import { IController } from '@logic/interfaces'
import { TResponse } from '@logic/types';
import { validateInsert } from './providers/validator'

class Actions implements IController {
}

const serviceActions = new Actions()

export default serviceActions