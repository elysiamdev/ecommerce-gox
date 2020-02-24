exports.up = function (knex) {
    return knex.schema
        .createTable('orders', (table) => {
            table.increments('id')
            table.string('reference').unique().notNullable()
            table.string('shipping_address_name', 255).notNullable()
            table.string('shipping_address_street', 255).notNullable()
            table.string('shipping_address_number', 10).notNullable()
            table.string('shipping_address_complement', 100).nullable()
            table.string('shipping_address_city', 100).notNullable()
            table.string('shipping_address_state', 100).notNullable()
            table.string('shipping_address_postal_code', 32).notNullable()
            table.string('shipping_address_country', 32).notNullable()
            table.string('billing_address_name', 255).notNullable()
            table.string('billing_address_street', 255).notNullable()
            table.string('billing_address_number', 10).notNullable()
            table.string('billing_address_complement', 100).nullable()
            table.string('billing_address_city', 100).notNullable()
            table.string('billing_address_state', 100).notNullable()
            table.string('billing_address_postal_code', 32).notNullable()
            table.string('billing_address_country', 32).notNullable()
            table.integer('user_profile_id').references('id').inTable('users_profiles').index()
            table.timestamp('created_at').defaultTo(knex.fn.now())
        })
};

exports.down = function (knex) {
    return knex.schema.dropTable('orders')
};