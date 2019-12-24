import { IHttpRequest } from "gox-packages";
import {
    insertService,
    getService,
    updateService,
    deleteService,
    getAllService,
    getBySlugService
} from '../index'

export const getProductRequest: IHttpRequest = async (req, res, next) => {
    let response = await getService(req.params.id)
    res.json(response).status(200);
}
export const updateProductRequest: IHttpRequest = async (req, res, next) => {
    let response: any = await updateService(req.body)
    res.json(response).status(200)
}
export const getProductsRequest: IHttpRequest = async (req, res, next) => {
    let response = await getAllService(req.body)
    res.json(response);
}
export const deleteProductRequest: IHttpRequest = async (req, res, next) => {
    let response = await deleteService(req.body)
    res.json(response).status(200)
}
export const insertProductRequest: IHttpRequest = async (req, res, next) => {
    let response = await insertService(req.body)
    res.json(response).status(200)
}
export const getBySlugRequest: IHttpRequest = async (req, res, next) => {
    let response = await getBySlugService(req.params.slug)
    res.json(response).status(200)
}
export default {
    getProductRequest,
    updateProductRequest,
    getProductsRequest
}