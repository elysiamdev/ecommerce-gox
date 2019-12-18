import { TUser, TUsers } from './providers/types'
import { IController } from '@logic/interfaces'
import { TResponse } from '@logic/types';
import { validateInsert } from './providers/validator'
import { insertOne } from './model';

class Actions implements IController {
    getOne = async (id: string) => {
        let response: TResponse = {}
        return response;
    }
    getAll = async () => {
        let response: TResponse = {}
        return response;
    }
    deleteOne = async (id: string) => {
        let response: TResponse = {}
        return response;
    }
    insertOne = async <TUser>(user: TUser) => {
        user = { ...user, role: 1 }
        let response: TResponse = {};
        let isValid = validateInsert(user)

        if (!isValid) {
            let didInsert = await insertOne(user)
            if (didInsert) {
                response.success = true;
                response.message = ['User inserted!']
            }
            else {
                response.success = false;
                response.message = ['We have problem, please try it later or contact us']
            }
            return response;
        }
        else {
            response.success = false;
            response.message = isValid
            return response;
        }

    }
}

const serviceActions = new Actions()

export default serviceActions