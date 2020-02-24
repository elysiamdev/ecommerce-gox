import { TResponse } from '../types'


export interface IModelData {
    (data?: any): Promise<any>
}

export interface IControllerAction<T> {
    (data?: any): T
}

export interface IController {
    getOne?(id: string): Promise<TResponse>
    getAll?(): Promise<TResponse>
    updateOne?(id: string): Promise<TResponse>
    deleteOne?(id: string): Promise<TResponse>
    insertOne?<T>(data: T): Promise<TResponse>
}