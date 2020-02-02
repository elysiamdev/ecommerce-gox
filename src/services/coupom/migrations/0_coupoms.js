exports.up = function(knex) {
    return knex.schema
        .createTable('coupoms', (table) => {
            table.increments('id')
            table.string('description').notNullable()
            table.string('code').notNullable().unique()
        })
};

exports.down = function(knex) {
    return knex.schema.dropTable('coupoms')
};