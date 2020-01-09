import knex from './src/server/db'

const config = {
    directory: [
        './src/services/users/migrations',
    ]
}

knex.migrate.latest(config)
    .finally(() => {
        knex.destroy()
    })