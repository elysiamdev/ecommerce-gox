import { Application } from "express";
import { rootPath } from '../config'
import fs from 'fs'
import { IMiddelware } from "@logic/interfaces";

const middlewarePattern: IMiddelware = (req, res, next) => next()

const servicesList = fs.readdirSync(`${rootPath}/services/`);

const requireServices: Array<any> = servicesList.filter((item: string) => (item !== 'index.ts' && item !== '.DS_Store'))

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
