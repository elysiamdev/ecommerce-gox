import clientDb from '@logic/clientDb'
import { validateInsert, validateUpdate } from './helpers/validate'
import { Order, Orders } from './providers/types';

const ordersModel = new clientDb<Order>('orders')

export const insertService = async (product: any) => {
    let data = validateInsert(product);
    if (data.success) {
        let response = await ordersModel.insert(product)
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
export const updateService = async (product: any) => {
    let data = validateUpdate(product);
    if (data.success) {
        let response: any = await ordersModel.update(product)
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
export const getAllService = async (data: any) => {
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