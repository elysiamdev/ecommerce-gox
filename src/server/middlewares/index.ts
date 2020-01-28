import { Application } from 'express'
import httpToHttps from './httpToHttps'
import ignoreFavicon from './ignoreFavicon'
import setBodyParser from './setBodyParser'
import setHeaders from './setHeaders'
import setViewEngine from './setViewEngine'
import setStaticAssets from './setStaticAssets'
import setCookieParser from './setCookieParser'
import setSession from './setSession'
import setupPassport from './setupPassport'

export default (app: Application) => {
    setCookieParser(app)
    setSession(app)
    httpToHttps(app)
    ignoreFavicon(app)
    setBodyParser(app)
    setHeaders(app)
    setViewEngine(app)
    setStaticAssets(app)
    setupPassport(app)
}