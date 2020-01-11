import fs from 'fs'
import { database as clientDb } from 'gox-packages'

const siteModel = new clientDb('site');

const getData = async () => {
    let response: any = siteModel.getAll()
    return response[0]
}

const generateHeader = () => {

}