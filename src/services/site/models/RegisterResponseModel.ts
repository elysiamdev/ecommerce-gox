import { IResponseModel } from './IResponseModel'

class RegisterResponseModel implements IResponseModel {
    readonly message: string
    readonly data: {}

    constructor(message: string, data: {}) {
        this.message = message
        this.data = data
    }
}

export { RegisterResponseModel }