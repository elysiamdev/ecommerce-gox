import { IHttpExpress } from "@logic/interfaces";
import {
    insertService,
    getService,
    updateService,
    deleteService,
    getAllService,
    getBySlugService
} from '../index'

export const getProductRequest: IHttpExpress = async (req, res, next) => {
    let response = await getService(req.params.id)
    res.json(response).status(200);
}
export const updateProductRequest: IHttpExpress = async (req, res, next) => {
    let response: any = await updateService(req.body)
    res.json(response).status(200)
}
export const getProductsRequest: IHttpExpress = async (req, res, next) => {
    let response = await getAllService(req.body)
    res.json(response);
}
export const deleteProductRequest: IHttpExpress = async (req, res, next) => {
    let response = await deleteService(req.body)
    res.json(response).status(200)
}
export const insertProductRequest: IHttpExpress = async (req, res, next) => {
    let response = await insertService(req.body)
    res.json(response).status(200)
}
export const getBySlugRequest: IHttpExpress = async (req, res, next) => {
    let response = await getBySlugService(req.params.slug)
    res.json(response).status(200)
}
export default {
    getProductRequest,
    updateProductRequest,
    getProductsRequest
}