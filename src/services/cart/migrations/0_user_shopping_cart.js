exports.up = function(knex) {
    return knex.schema
        .createTable('user_shopping_cart', (table) => {
            table.increments('id')
            table.integer('applied_coupom').references('id').inTable('coupoms').index()
            table.integer('user_profile_id').references('id').inTable('users_profiles').index()
        })
};

exports.down = function(knex) {
    return knex.schema.dropTable('user_shopping_cart')
};