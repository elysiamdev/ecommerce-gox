exports.up = function(knex) {
    return knex.schema
        .createTable('addresses', (table) => {
            table.increments('id')
            table.string('address_1', 255).notNullable()
            table.string('address_2', 255).notNullable()
            table.string('city', 255).notNullable()
            table.string('state', 255).notNullable()
            table.string('postal_code', 255).notNullable()
            table.string('country', 255).notNullable()
            table.timestamp('created_at').defaultTo(knex.fn.now())
            table.integer('address_type_id').references('id').inTable('address_types').index()
            table.integer('user_profile_id').references('id').inTable('users_profiles').index()
        })
};

exports.down = function(knex) {
    return knex.schema.dropTable('addresses')
};
