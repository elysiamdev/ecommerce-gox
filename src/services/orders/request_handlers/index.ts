import { IHttpExpress } from "@logic/interfaces";
import {
    insertService,
    getService,
    updateService,
    deleteService,
    getAllService
} from '../index'

export const getOrderRequest: IHttpExpress = async (req, res, next) => {
    let response = await getService(req.params.id)
    res.json(response).status(200);
}
export const updateOrderRequest: IHttpExpress = async (req, res, next) => {
    let response: any = await updateService(req.body)
    res.json(response).status(200)
}
export const getOrdersRequest: IHttpExpress = async (req, res, next) => {
    let response = await getAllService(req.body)
    res.json(response);
}
export const deleteOrderRequest: IHttpExpress = async (req, res, next) => {
    let response = await deleteService(req.body)
    res.json(response).status(200)
}

export const insertOrderRequest: IHttpExpress = async (req, res, next) => {
    let response = await insertService(req.body)
    res.json(response).status(200)
}
export default {
    getOrderRequest,
    updateOrderRequest,
    getOrdersRequest,
    deleteOrderRequest,
    insertOrderRequest
}