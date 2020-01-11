import { dbConfig } from '../../config'

let options = {}

if (process.env.NODE_ENV === 'production') {
    options = dbConfig.prod_database
}
else {
    options = dbConfig.local_database
}
console.log(options)
let knex = require('knex')({ ...options, debug: false });

export default knex;