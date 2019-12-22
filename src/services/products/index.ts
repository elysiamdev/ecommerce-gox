import clientDb from '@logic/clientDb'
import { validateInsert, validateUpdate } from './helpers/validate'
import { Product } from './providers/types';

const productsModel = new clientDb<Product>('products')

export const insert = async (product: any) => {
    let data = validateInsert(product);
    if (data.success) {
        let response = await productsModel.insert(product)
        return {
            success: true,
            data: response
        };
    } else {
        return data;
    }
}
export const getProduct = async (id: any) => {
    let response = await productsModel.getOne(id)
    return response;
}
export const updateProduct = async (product: any) => {
    let data = validateUpdate(product);
    if (data.success) {
        let response: any = await productsModel.update(product)
        return {
            success: response.length > 0,
            data: response
        }
    } else {
        return data;
    }

}
export const deleteProduct = async (id: string) => {
    if (id) {
        let response = await productsModel.delete(id)
        return response;
    }
    else {
        return {
            success: false,
            message: ['missing id!']
        }
    }
}
export const getAll = async (data: any) => {
    let response: any = await productsModel.getAll()
    return {
        success: response.length > 0,
        data: response
    }
}

export default {
    insert,
    getProduct,
    updateProduct,
    deleteProduct,
    getAll
}