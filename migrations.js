import knex from './src/server/db'
import fs from 'fs'
require('dotenv').config()




const config = {
    directory: [
        './src/services/users/migrations',
        './src/services/products/migrations',
    ]
}

// knex.migrate.latest(config)
//     .finally(() => {
//         knex.destroy()
//     })

const getDirectories = () => new Promise(resolve => {
    let path = `${__dirname}/src/services`

    fs.readdir(path, (err, listdir) => err ? resolve(err) : resolve(listdir))

})



getDirectories()