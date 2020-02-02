const addProductIndex = `
ALTER TABLE public.products 
    ADD searchable_column_fts tsvector 
    GENERATED ALWAYS AS (to_tsvector('unaccent_portuguese', coalesce(name, '') || ' ' || coalesce(description, ''))) STORED;

CREATE INDEX idx_searchable_column_fts_products ON public.products USING gin(searchable_column_fts);
`;

exports.up = function (knex) {
    console.log("Creating products")
    return knex.schema
        .createTable('products', (table) => {
            table.increments('id')
            table.string('name', 255).notNullable()
            table.string('slug', 255).notNullable()
            table.string('description', 2000).notNullable()
            table.string('images', 1000).notNullable()
            table.string('buy_value', 1000).notNullable()
            table.string('sell_value', 1000).notNullable()
            table.timestamp('created_at').defaultTo(knex.fn.now())
        })
        .then(() => {
            return knex.schema.raw(addProductIndex);
        })
};

exports.down = function (knex) {
    return knex.schema.dropTable('products')
};