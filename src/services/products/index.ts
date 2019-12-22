import clientDb from '@logic/clientDb'
import { validateInsert, validateUpdate } from './helpers/validate'

type Product = {

}
const productsModel = new clientDb('products')

export const insert = async (product: any) => {
    let data = validateInsert(product);
    if (data.success) {
        // validade model here - TODO
        let response = await productsModel.insert(product)
        // default response - TODO
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
        let response = await productsModel.update(product)
        return response
    } else {
        return data;
    }

}
export const deleteProduct = async (id: string) => {
    let response = await productsModel.delete(id)
    return response;
}
export const getAll = async (data: any) => {
    let response = await productsModel.getAll()
    return response
}

export default {
    insert,
    getProduct,
    updateProduct,
    deleteProduct,
    getAll
}