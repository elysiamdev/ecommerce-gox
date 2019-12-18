import { IMiddelware } from '@logic/interfaces'
import { Application } from 'express';

export const ignoreFavicon: IMiddelware = (req, res, next) => {
    if (req.originalUrl === '/favicon.ico') {
        res.status(204).json({ nope: true });
    } else {
        next();
    }
}

export default (app: Application) => app.use(ignoreFavicon)