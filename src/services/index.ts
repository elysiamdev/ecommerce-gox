import { Application } from "express";
import { rootPath } from '../config'
import fs from 'fs'
import { IMiddelware } from "@logic/interfaces";

const middlewarePattern: IMiddelware = (req, res, next) => next()

const servicesList = fs.readdirSync(`${rootPath}/services/`);

const requireServices: Array<any> = servicesList.filter((item: string) => {
    return item != 'index.ts'
})

let servicesObject: any = {}

requireServices.map((item: string) => {
    servicesObject[item] = require(`./${item}/routes`)
})

const listServices = Object.keys(servicesObject);

export default (app: Application) => {
    listServices.map((item: string) => {
        if (typeof servicesObject[item].default == 'function') {
            app.use(`/${item}`, servicesObject[item].default, middlewarePattern)
        }
    })
}
