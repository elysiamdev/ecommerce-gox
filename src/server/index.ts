import express from 'express'
import http from 'http'
import middlewares from './middlewares'
import services from '../services'

const serverEngine = () => {

    const app = express()

    middlewares(app)
    services(app)

    const port: any = process.env.PORT || 4003
    const server = http.createServer(app)

    server.listen(port, () => {
        console.log(`listen on port ${port}`)
    })
}

export default serverEngine;