import { dbConfig } from '../../config'

let options = {}

if (process.env.NODE_ENV === 'production') {
    options = dbConfig.prod_database
}
else {
    options = dbConfig.local_database
}
let knex = require('knex')(options);

export default knex;