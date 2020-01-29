import path from 'path'
import exphbs from 'express-handlebars'
import { Application } from 'express'

const setEngineView = (app: Application) => {
    const hbs = exphbs.create({
        helpers: {
            isDev: () => process.env.NODE_ENV === 'dev'
        },
        extname: '.hbs'
    })
    app.engine('.hbs', hbs.engine)
    app.set('view engine', '.hbs');
    app.set('views', path.resolve(__dirname, '../views'))
}

export default setEngineView;