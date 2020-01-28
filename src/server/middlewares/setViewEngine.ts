import path from 'path'
import Handlebars from 'handlebars'
import exphbs from 'express-handlebars'
import { Application } from 'express'
import helpers from '@logic/handlebars/helpers'

const setEngineView = (app: Application) => {
    const hbs = exphbs.create({
        handlebars: Handlebars,
        helpers: helpers,
        extname: '.hbs'
    })
    app.engine('.hbs', hbs.engine)
    app.set('view engine', '.hbs');
    app.set('views', path.resolve('src/views'))
}

export default setEngineView;