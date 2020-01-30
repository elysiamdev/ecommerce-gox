exports.up = function (knex) {
    return knex.schema
        .createTable('settings', (table) => {
            table.increments('id')
            table.string('name', 255).notNullable()
            table.string('data', 255).notNullable()
            table.timestamp('created_at').defaultTo(knex.fn.now())
        })
};

exports.down = function (knex) {
    return knex.schema.dropTable('settings')
};