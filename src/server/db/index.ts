import { dbConfig } from '../../config'

let options = {}

switch(process.env.NODE_ENV) {
    case 'production':
        options = dbConfig.prod_database
        break;
    case 'test':
        options = dbConfig.test_database
        break
    default:
        options = dbConfig.local_database
}

let knex = require('knex')({ ...options, debug: false });

export default knex;