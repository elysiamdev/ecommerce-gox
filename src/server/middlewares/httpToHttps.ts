import { Application } from "express";
import { redirectToHTTPS } from 'express-http-to-https'

export default (app: Application) => {
    if(process.env.NODE_ENV == 'production') {
        app.use(redirectToHTTPS([/localhost:(\d{4})/], [/\/insecure/], 301));
    }
}
