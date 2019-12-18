import knex from '@database/index'
import { TTableObject } from '@logic/types'
const tableName: string = 'users'

const createTableIfExists = () => knex.schema.hasTable(tableName)
    .then((exists: boolean) => {
        if (!exists) {
            return knex.schema.createTable('users', (table: TTableObject) => {
                table.increments('id').primary();
                // --------------
                // TODO -> creation of items as table design
                // example bellow =>
                // --------------

                // table.string('first_name', 100);
                // table.string('last_name', 100);
                // table.text('bio');
            });
        }
    }).cacth((err: any) => {
        console.log(err)
    })

createTableIfExists()