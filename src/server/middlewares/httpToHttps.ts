import { Application } from "express";
import { redirectToHTTPS } from 'express-http-to-https'

export default (app: Application) => {
    app.use(redirectToHTTPS([/localhost:(\d{4})/], [/\/insecure/], 301));
}
