import { TUser, TUsers } from './providers/types'
import { IController } from '@logic/interfaces'
import { TResponse } from '@logic/types';
import { validateInsert } from './providers/validator'
import { insertOne, getByEmail } from './model';

export const getOne = async (id: string) => {
    let response: TResponse = {}
    return response;
}
export const getAll = async () => {
    let response: TResponse = {}
    return response;
}
export const deleteOne = async (id: string) => {
    let response: TResponse = {}
    return response;
}
export const insert = async <TUser>(user: TUser) => {
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

export const userByEmail = async (email: string) => {
    let user: Array<any> = await getByEmail(email);
    let response: TResponse = {
        success: (user.length > 0),
        data: user.length ? user[0] : null,
        message: [user.length ? 'User exists!' : 'User not found!']
    }
    return response;
}