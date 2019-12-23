import { TResponse } from '@logic/types';
import { validateInsert } from './providers/validator'
import { insertOne, getByEmail } from './model';

import clientDb from '@logic/clientDb'

const usersModel = new clientDb('users')


export const getOne = async (id: string) => {
    let response: any = await usersModel.getOne(id)
    return {
        success: response.length > 0,
        data: response.length ? response[0] : null,
        message: response.length ? [`${response.length} users found`] : ['Ops! we couldn ot found the user']
    };
}
export const getAll = async () => {
    let response: any = await usersModel.getAll()
    return {
        success: response.length > 0,
        data: response,
        message: [`${response.length} users found`]
    };
}
export const deleteOne = async (id: string) => {
    let response: any = await usersModel.delete(id)
    return {
        success: response.length > 0,
        message: [`${response.length} users deleted`]
    }
}
export const insertUser = async (user: any) => {
    user = { ...user, role: 1 }
    let data = validateInsert(user)
    if (data.success) {
        let response: any = await usersModel.insert(user);
        return {
            success: response.length > 0,
            message: ['']
        }
    }
    else {
        return data;
    }
}
export const updateService = async (user: any) => {
    let response: any = await usersModel.update(user)
    return {
        success: response.length > 0,
        data: response
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

export default { getOne, getAll, deleteOne, insertUser, userByEmail }