import knex from './src/server/db'
import fs from 'fs'
require('dotenv').config()

const getDirectories = () => new Promise(resolve => {
    let path = `${__dirname}/src/services`
    fs.readdir(path, (err, listdir) => err ? resolve(err) : resolve(listdir))
})

function main() {
    getDirectories().then(response => {
        if (response) {
            let listdirs = response.filter(item => item !== 'index.ts')
            listdirs = listdirs.map(item => `./src/services/${item}/migrations`)
            const config = {
                directory: [
                    './src/services/admin/migrations',
                    './src/services/users/migrations',
                    './src/services/products/migrations',
                ]
            }
            knex.migrate.latest(config)
                .finally(() => {
                    knex.destroy()
                })
        }
        else {
            console.log('migration fail')
        }

    })
}

main()