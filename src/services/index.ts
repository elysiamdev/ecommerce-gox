import { Application } from "express";
import { rootPath } from '../config'
import fs from 'fs'
import { IMiddelware } from "../logic/interfaces";
import { scapeRouter } from 'gox-packages'

const servicesList = fs.readdirSync(`${rootPath}/services/`);
const middlewarePattern: IMiddelware = (req, res, next) => next()

const requireServices: Array<any> = servicesList.filter((item: string) => scapeRouter(item))
let servicesObject: any = {}

requireServices.map((service: string) => {
    servicesObject[service] = require(`./${service}`)
})

export default (app: Application) => {
    Object.keys(servicesObject).map((service: string) => {
        const { entryPoint, router } = servicesObject[service].default

        if(router) {
            app.use(entryPoint, router)
        }
    })
}
