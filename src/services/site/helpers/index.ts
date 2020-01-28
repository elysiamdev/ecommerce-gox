import { database as clientDb } from 'gox-packages'


const siteDataService = new clientDb('site');

const getSiteData = async () => {
    let response: any = await siteDataService.getAll();
    response = response.length ? response[0] : null

}