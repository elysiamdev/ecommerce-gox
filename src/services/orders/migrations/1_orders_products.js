exports.up = function (knex) {
    return knex.schema
        .createTable('orders_products', (table) => {
            table.increments('id')
            table.integer('product_id').references('id').inTable('products').index().notNullable()
            table.integer('quantity').notNullable()
            table.integer('order_id').references('id').inTable('orders').index()
        })
};

exports.down = function (knex) {
    return knex.schema.dropTable('orders_products')
};