import { Application } from 'express'
import httpToHttps from './httpToHttps'
import ignoreFavicon from './ignoreFavicon'
import setBodyParser from './setBodyParser'
import setHeaders from './setHeaders'

export default (app: Application) => {
    httpToHttps(app);
    ignoreFavicon(app);
    setBodyParser(app);
    setHeaders(app);
}