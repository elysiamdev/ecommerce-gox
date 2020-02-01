import { database } from 'gox-packages'

const clientDb = new database('settings');


export const retrieveItem = async () => {
    let response: any = await clientDb.getAll()
    let data = response.length > 0 ? response[0] : null
    return {
        success: data !== null,
        messages: data !== null ? ['Item inserted'] : ['problem while inserting'],
        data: data,
    }
}

export const insertItem = async (item: any) => {
    let response: any = await clientDb.update(item)

    return {
        success: response !== 0,
        data: response,
        messages: response !== 0 ? ['Item updated'] : ['update item']
    }
}
