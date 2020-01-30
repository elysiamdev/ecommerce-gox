import path from 'path'
import express, { Application } from 'express'

const setStaticAssets = (app: Application) => {
    app.use('/static', express.static(path.resolve('public')));
}

export default setStaticAssets