import clientDb from '@logic/clientDb'
type Product = {

}
const productsModel = new clientDb('products')

export const insert = async (product: any) => {
    // validade model here - TODO
    let response = await productsModel.insert(product)
    // default response - TODO
    return response;
}
export const getProduct = async (id: any) => {
    let response = await productsModel.getOne(id)
    return response;
}
export const updateProduct = async (product: any) => {
    let response = await productsModel.update(product)
    return response
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