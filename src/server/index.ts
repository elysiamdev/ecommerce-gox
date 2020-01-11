import express from 'express'
import middlewares from './middlewares'
import services from '../services'

const serverEngine = () => {

    const app = express()

    middlewares(app)
    services(app)
    
    return app
}

export default serverEngine;
