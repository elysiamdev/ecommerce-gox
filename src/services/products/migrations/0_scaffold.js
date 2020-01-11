exports.up = function (knex) {
    return knex.schema
        .createTable('products', (table) => {
            table.increments('id')
            table.string('name', 255).notNullable()
            table.string('supplier', 255).notNullable()
            table.string('especifications', 255).notNullable()
            table.string('details', 255).notNullable()
            table.string('description', 255).notNullable()
            table.string('quantity', 255).notNullable()
            table.string('related_ids', 255).notNullable()
            table.string('categories_ids', 1000).notNullable()
            table.string('images', 1000).notNullable()
            table.string('buy_value', 1000).notNullable()
            table.string('sell_value', 1000).notNullable()
            table.timestamp('created_at').defaultTo(knex.fn.now())
        })
};

exports.down = function (knex) {
    return knex.schema.dropTable('users_profiles')
};