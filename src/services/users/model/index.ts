import knex from '@database/index'
import { TUsers } from '../providers/types'
import { IModelData } from '@logic/interfaces'

export const Users: any = () => knex('users');

export const getAll: IModelData = () => new Promise<TUsers>(resolve => {
    Users().select('*')
        .then((response: TUsers) => {
            resolve(response)
        })
        .catch((err: any) => {
            resolve([])
        })
})

export const insertOne: IModelData = (data) => new Promise(resolve => {
    Users().insert(data)
        .then((response: any) => resolve(response))
        .catch((err: any) => {
            console.warn(err)
            resolve([])
        })
})

export const deleteOne: IModelData = (id: string) => new Promise(resolve => {
    Users().where('id', id).delete()
        .then((response: any) => {
            resolve(response)
        })
        .catch((err: any) => {
            console.warn(err)
            resolve([])
        })
})


export const getByEmail: IModelData = (email: string) => new Promise(resolve => {
    Users().select().where('email', email)
        .then((response: any) => resolve(response))
        .catch((err: any) => {
            console.log(err)
            resolve([])
        })
})

export default {
    getAll,
    insertOne,
    deleteOne,
    getByEmail
}