import knex from './src/server/db'
require('dotenv').config()

const config = {
    directory: [
        './src/services/users/migrations',
        './src/services/products/migrations',
    ]
}

knex.migrate.latest(config)
    .finally(() => {
        knex.destroy()
    })