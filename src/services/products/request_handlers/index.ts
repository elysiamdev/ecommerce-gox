import {
    insertService,
    getService,
    updateService,
    deleteService,
    getAllService,
    getBySlugService
} from '../services'

export const getProductRequest = async (req: any, res: any, next: any) => {
    let response = await getService(req.params.id)
    res.json(response).status(200);
}
export const updateProductRequest = async (req: any, res: any, next: any) => {
    let response: any = await updateService(req.body)
    res.json(response).status(200)
}
export const getProductsRequest = async (req: any, res: any, next: any) => {
    let response = await getAllService()
    res.json(response);
}
export const deleteProductRequest = async (req: any, res: any, next: any) => {
    let response = await deleteService(req.body)
    res.json(response).status(200)
}
export const insertProductRequest = async (req: any, res: any, next: any) => {
    let response = await insertService(req.body)
    res.json(response).status(200)
}
export const getBySlugRequest = async (req: any, res: any, next: any) => {
    let response = await getBySlugService(req.params.slug)
    res.json(response).status(200)
}
export default {
    getProductRequest,
    updateProductRequest,
    getProductsRequest
}