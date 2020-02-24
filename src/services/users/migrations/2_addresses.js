exports.up = function(knex) {
    return knex.schema
        .createTable('addresses', (table) => {
            table.increments('id')
            table.string('name', 255).notNullable()
            table.string('street', 255).notNullable()
            table.string('number', 10).notNullable()
            table.string('complement', 100).nullable()
            table.string('city', 100).notNullable()
            table.string('state', 100).notNullable()
            table.string('postal_code', 32).notNullable()
            table.string('country', 32).notNullable()
            table.integer('user_profile_id').references('id').inTable('users_profiles').index()
            table.timestamp('created_at').defaultTo(knex.fn.now())
        })
};

exports.down = function(knex) {
    return knex.schema.dropTable('addresses')
};
