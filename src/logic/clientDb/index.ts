import knex from "@database/index";

class ClientKnex<T> {
    private service: Function;

    constructor(tableName: string) {
        this.service = () => knex(tableName)
    }
    insert = (data: T) => new Promise(resolve => {
        this.service().insert(data)
            .then((response: Array<any>) => {
                resolve(response)
            })
            .catch((err: any) => {
                console.log(err)
                resolve([])
            })
    })
    getAll = () => new Promise(resolve => {
        this.service().select('*')
            .then((response: Array<T>) => resolve(response))
    })
    update = (data: any) => new Promise(resolve => {
        let dataToUpdate: any = { ...data, id: null }
        delete dataToUpdate.id
        this.service().where('id', data.id).update(data)
            .then((response: any) => resolve(response))
    })
    delete = (id: string) => new Promise(resolve => {
        this.service().where('id', id).delete()
            .then((response: any) => {
                resolve(response)
            })
            .catch((err: any) => {
                console.log(err)
                resolve([])
            })
    })

    getOne = (id: string) => new Promise(resolve => {
        this.service().select().where('id', id)
            .then((response: Array<T>) => {
                resolve(response)
            })
            .catch((err: any) => {
                console.log(err)
                resolve([])
            })
    })

}

export default ClientKnex;