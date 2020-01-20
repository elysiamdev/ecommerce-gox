import { validateInsert, validateUpdate } from './helpers/validate'
import { ProductsRepository } from './db/ProductsRepository'
import slug from 'slug'
import knex from '@database/index'

const productsRepository = new ProductsRepository(knex)

export const insertService = async (product: any) => {
    const data = validateInsert(product);
    if (data.success) {
        const sluggified_product = { ...product, slug: slug(product.name) }
        const response: any = await productsRepository.update(sluggified_product)
        return {
            success: true,
            data: response
        };
    } else {
        return data;
    }
}

export const getService = async (id: any) => {
    const response = await productsRepository.findById(id)
    return response;
}
export const updateService = async (product: any) => {
    const data = validateUpdate(product);
    if (data.success) {
        const sluggified_product = { ...product, slug: slug(product.name) }
        let response: any = await productsRepository.update(sluggified_product)
        return {
            success: response.length > 0,
            data: response
        }
    } else {
        return data;
    }

}
export const deleteService = async (id: number) => {
    if (id) {
        const response = await productsRepository.delete(id)
        return response;
    }
    else {
        return {
            success: false,
            message: ['missing id!']
        }
    }
}
export const getAllService = async (data: any) => {
    const response: any = await productsRepository.findAll()
    return {
        success: response.length > 0,
        data: response
    }
}
export const getBySlugService = async (slugUrl: any) => {
    const response: any = await productsRepository.findByColumn('slug_url', slugUrl)
    return {
        success: response.length,
        data: response
    }
}
export default {
    insertService,
    getService,
    updateService,
    deleteService,
    getAllService,
    getBySlugService
}