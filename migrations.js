import knex from './src/server/db'

const config = {
    directory: [
        './src/services/users/migrations',
        './src/services/products/migrations',
        './src/services/coupom/migrations',
        './src/services/cart/migrations',
        './src/services/orders/migrations',
    ],
    sortDirsSeparately: true
}

knex.migrate.latest(config)
    .finally(() => {
        knex.destroy()
    })