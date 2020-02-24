import { CreateProductModel, UpdateProductModel } from "../models"

class ProductsRepository {
    private client: any

    constructor(knex: any) {
        this.client = knex
    }

    async findAll(): Promise<Array<{ id: number}>> {
        return this.client('products').select('id', 'name', 'slug', 'description', 'images', 'buy_value', 'sell_value')
    }

    async create(productModel: CreateProductModel): Promise<{ id: number }> {
        const [ id ] = await this.client.insert(productModel).returning('id')
        
        return { id: id }
    }

    async findById(id: number): Promise<{ id: number }> {
        return { id }
    }

    async findByColumn(column: string, value: any): Promise<{id: number}> {
        return await this.client('products').where(column, value).first()        
    }

    async update(productModel: UpdateProductModel): Promise<{ id: number }> {
        return { id: 1}
    }

    async delete(id: number): Promise<boolean> {
        return true
    }

    async exists(id: number): Promise<boolean> {
        const result = await this.client('products').where('id', id).first()

        if(result) {
            return true
        }
        return false
    }

    async exist(ids: Array<number>): Promise<Array<{ exists: boolean, id: number}>> {
        const result = await Promise.all(ids.map(async id => ({ id, exists: await this.exists(id)})))

        return result
    }

    async search(term: string): Promise<Array<{ id: number, name: string, description: string, sell_value: string }>> {
        const found = await this.client('products').select('id', 'name', 'description', 'sell_value').where(function (q: any) {
            q.whereRaw("plainto_tsquery('unaccent_portuguese', unaccent(?)) @@ products.searchable_column_fts", [term])
        })

        return found
    }
}

export { ProductsRepository }