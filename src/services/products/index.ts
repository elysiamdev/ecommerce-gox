import { database as clientDb } from 'gox-packages'
import { validateInsert, validateUpdate } from './helpers/validate'
import { Product, Products } from './providers/types';


const productsModel = new clientDb<Product>('products')

export const insertService = async (product: any) => {
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

export const getService = async (id: any) => {
    let response = await productsModel.getOne(id)
    return response;
}
export const updateService = async (product: any) => {
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
export const deleteService = async (id: string) => {
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
export const getAllService = async (data: any) => {
    let response: any = await productsModel.getAll()
    return {
        success: response.length > 0,
        data: response
    }
}
export const getBySlugService = async (slugUrl: any) => {
    let response: any = await productsModel.getByField('slug_url', slugUrl)
    return {
        success: response.length,
        data: response
    }
}
export default {
    insertService,
    getService,
    updateService,
    deleteService,
    getAllService,
    getBySlugService
}