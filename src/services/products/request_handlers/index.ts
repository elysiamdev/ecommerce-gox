import { IHttpExpress } from "@logic/interfaces";
import {
    insert,
    getProduct,
    updateProduct,
    deleteProduct,
    getAll
} from '../index'

export const getProductRequest: IHttpExpress = async (req, res, next) => {
    let response = await getProduct(req.body)
    res.json(response).status(200);
}
export const updateProductRequest: IHttpExpress = async (req, res, next) => {
    let response: any = await updateProduct(req.body)
}
export const getProductsRequest: IHttpExpress = async (req, res, next) => {
    let response = await getAll(req.body)
    res.json(response);
}

export default {
    getProductRequest,
    updateProductRequest,
    getProductsRequest
}