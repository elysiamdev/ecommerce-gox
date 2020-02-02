import { SessionCartRepository } from '../repositories/SessionCartRepository'

const makeAddProductIntoCart = (repository: SessionCartRepository) => (product: any) => {
    repository.addProduct(product)
}

const makeRemoveProductFromCart = (repository: SessionCartRepository) => (id: number) => {
    repository.removeProduct(id)
}

export { makeAddProductIntoCart }