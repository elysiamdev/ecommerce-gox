exports.up = function(knex) {
    return knex.schema
        .createTable('users_profiles', (table) => {
            table.increments('id')
            table.string('fullname', 255).notNullable()
            table.string('cpf', 20).unique().notNullable()
            table.timestamp('created_at').defaultTo(knex.fn.now())
        })
};
  
exports.down = function(knex) {
    return knex.schema.dropTable('users_profiles')
};