exports.up = function(knex) {
    return knex.schema
        .createTable('user_local_credentials', (table) => {
            table.increments('id')
            table.string('email', 255).notNullable()
            table.string('password', 1024).notNullable()
            table.integer('user_profile_id').references('id').inTable('users_profiles').index()
        })
};

exports.down = function(knex) {
    return knex.schema.dropTable('user_local_credentials')
};