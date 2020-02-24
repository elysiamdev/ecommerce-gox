import { Application } from 'express';

export const ignoreFavicon = (req: any, res: any, next: any) => {
    if (req.originalUrl === '/favicon.ico') {
        res.status(204).json({ nope: true });
    } else {
        next();
    }
}

export default (app: Application) => app.use(ignoreFavicon)