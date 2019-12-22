import { IHttpExpress } from "@logic/interfaces";
import {
    insert,
    getProduct,
    updateProduct,
    deleteProduct,
    getAll
} from '../index'

export const getProductRequest: IHttpExpress = async (req, res, next) => {
    let response = await getProduct(req.params.id)
    res.json(response).status(200);
}
export const updateProductRequest: IHttpExpress = async (req, res, next) => {
    let response: any = await updateProduct(req.body)
    res.json(response).status(200)
}
export const getProductsRequest: IHttpExpress = async (req, res, next) => {
    let response = await getAll(req.body)
    res.json(response);
}
export const deleteProductRequest: IHttpExpress = async (req, res, next) => {
    let response = await deleteProduct(req.body)
    res.json(response).status(200)
}

export const insertProductRequest: IHttpExpress = async (req, res, next) => {
    let response = await insert(req.body)
    res.json(response).status(200)
}
export default {
    getProductRequest,
    updateProductRequest,
    getProductsRequest
}