import express from 'express'
import middlewares from './middlewares'
import services from '../services'
import { errorHandler } from '../logic/errors/error_handler'

const serverEngine = () => {

    const app = express()

    middlewares(app)
    
    services(app)
    
    app.use(errorHandler)

    return app
}

export default serverEngine;
