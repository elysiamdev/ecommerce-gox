import knex from './src/server/db'

const config = { directory: 
    './tests/seeds',
}

knex.seed.run(config)
    .then(() => {
        knex.destroy()
    })