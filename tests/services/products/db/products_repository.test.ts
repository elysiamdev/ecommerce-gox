import knex from '../../../../src/server/db'
import { seedTables, clearDb } from '../../../helpers'
import { ProductsRepository } from '../../../../src/services/products/db/ProductsRepository'

describe('Users :: db :: ProductsRepository', () => {
    const repository = new ProductsRepository(knex)
    
    describe('#search', () => {
        test('searchs for products with a term', async () => {
            const term = 'armadura'
            const result = await repository.search(term)

            expect(result).toBeDefined()
        })
    })
})

beforeEach(async () => await seedTables())
afterEach(async () => await clearDb('products'))
afterEach(async () => await clearDb('users_profiles'))
afterAll(() => knex.destroy())