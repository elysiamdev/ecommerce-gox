import { Application } from 'express'
import httpToHttps from './httpToHttps'
import ignoreFavicon from './ignoreFavicon'
import setBodyParser from './setBodyParser'
import setHeaders from './setHeaders'
import setViewEngine from '../../services/site/middlewares/setViewEngine'
import setStaticAssets from '../../services/site/middlewares/setStaticAssets'

export default (app: Application) => {
    httpToHttps(app)
    ignoreFavicon(app)
    setBodyParser(app)
    setHeaders(app)
    setViewEngine(app)
    setStaticAssets(app)
}