import axios, { AxiosInstance } from 'axios'

const BASE_URL = 'http://ws.correios.com.br/calculador'

class CorreiosClient {
    private _client: AxiosInstance

    constructor() {
        this._client = axios.create({ baseURL: BASE_URL })
    }

    async calculate(requestParams: CorreiosRequestParams) {
        const response = this._client
            .get('/CalcPrecoPrazo.aspx', { params: requestParams })

        console.log(response)
    }
}

export { CorreiosClient }