import { dbConfig } from '../../config'

let options = {}

if (process.env.NODE_ENV === 'production') {
    options = dbConfig.prod_database
}
else {
    options = dbConfig.local_database
}
let knex = require('knex')('mysql://bzc6xkvsthagnw40:l1jeet4wjt3bbauc@ryvdxs57afyjk41z.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/u51wi5j93yzqsevh');

export default knex;