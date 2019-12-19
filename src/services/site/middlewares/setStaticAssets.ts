import path from 'path'
import express, { Application } from 'express'

const setStaticAssets = (app: Application) => {
    app.use('/static', express.static(path.join(__dirname, '../../../../public')));
}

export default setStaticAssets