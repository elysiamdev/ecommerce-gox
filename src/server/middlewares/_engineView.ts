import path from 'path'
import exphbs from 'express-handlebars'
import { Application } from 'express'
import { rootPath } from '../../config'

const setEngineView = (app: Application) => {

    var hbs = exphbs.create({
        helpers: {
            testing: function () {
                return 'testing aqui'
            }
        },
        extname: '.hbs'
    })
    app.engine('.hbs', hbs.engine)
    app.set('view engine', '.hbs');
    app.set('views', path.join(rootPath, '/views'));
}

export default setEngineView;