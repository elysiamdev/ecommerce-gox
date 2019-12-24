import { Application } from "express";
import { rootPath } from '../config'
import fs from 'fs'
import { IMiddelware } from "../logic/interfaces";
import { scapeRouter } from 'gox-packages'

const servicesList = fs.readdirSync(`${rootPath}/services/`);
const middlewarePattern: IMiddelware = (req, res, next) => next()

const requireServices: Array<any> = servicesList.filter((item: string) => scapeRouter(item))
let servicesObject: any = {}
requireServices.map((item: string) => {
    let routePath = `./${item}/routes`
    servicesObject[item] = require(routePath)
})

const listServices = Object.keys(servicesObject);

export default (app: Application) => {
    listServices.map((item: string) => {
        if (typeof servicesObject[item].default == 'function') {
            app.use(`/${item}`, servicesObject[item].default, middlewarePattern)
        }
    })
}
