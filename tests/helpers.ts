import knex from '../src/server/db'

const seedTables = async () => {
    
}

const clearDb = (table: string) => {
    return knex.raw(`TRUNCATE TABLE ${table} RESTART IDENTITY CASCADE`)
}

export { seedTables, clearDb }