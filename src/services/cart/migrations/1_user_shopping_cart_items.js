exports.up = function(knex) {
    return knex.schema
        .createTable('user_shopping_cart_items', (table) => {
            table.increments('id')
            table.integer('product_id').references('id').inTable('products').index()
            table.integer('quantity').notNullable()
            table.integer('user_shopping_cart_id').references('id').inTable('user_shopping_cart').index()
        })
};

exports.down = function(knex) {
    return knex.schema.dropTable('user_shopping_cart_items')
};