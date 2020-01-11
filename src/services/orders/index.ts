import { database as clientDb } from 'gox-packages'
import { validateInsert, validateUpdate } from './helpers/validate'
import { Order } from './providers/types';

const ordersModel = new clientDb<Order>('orders')

export const insertService = async (order: any) => {
    let data = validateInsert(order);
    if (data.success) {
        let response = await ordersModel.insert(order)
        return {
            success: true,
            data: response
        };
    } else {
        return data;
    }
}

export const getService = async (id: any) => {
    let response = await ordersModel.getOne(id)
    return response;
}
export const updateService = async (order: any) => {
    let data = validateUpdate(order);
    if (data.success) {
        let response: any = await ordersModel.update(order)
        return {
            success: response.length > 0,
            data: response
        }
    } else {
        return data;
    }
}

export const deleteService = async (id: string) => {
    if (id) {
        let response = await ordersModel.delete(id)
        return response;
    }
    else {
        return {
            success: false,
            message: ['missing id!']
        }
    }
}
export const getAllService = async () => {
    let response: any = await ordersModel.getAll()
    return {
        success: response.length > 0,
        data: response
    }
}

export default {
    insertService,
    getService,
    updateService,
    deleteService,
    getAllService
}