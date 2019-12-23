import { IHttpExpress } from "@logic/interfaces";
import {
    insertService,
    getService,
    updateService,
    deleteService,
    getAllService
} from '../index'

export const inserUserRequest: IHttpExpress = async (req, res, next) => {
    let response = await insertService(req.body);
    return res.json(response).status(200)
}

export const getUserRequest: IHttpExpress = async (req, res, next) => {
    let response = await getService(req.params.id)
    return res.json(response).status(200)
}

export const updateUserRequest: IHttpExpress = async (req, res, next) => {
    let response = await updateService(req.body)
    return res.json(response).status(200)
}

export const deleteUserRequest: IHttpExpress = async (req, res, next) => {
    let response = await deleteService(req.body)
    return res.json(response).status(200)
}

export const getUsersRequest: IHttpExpress = async (req, res, next) => {
    let response = await getAllService()
    return res.json(response).status(200)
}