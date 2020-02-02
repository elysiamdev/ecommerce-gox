import { SessionCartRepository } from '../repositories/SessionCartRepository'

const makeIncrementProductQuantity = (repository: SessionCartRepository) => async (id: number) => {
    const product = await repository.getProduct(id)

    if(product) {
        repository.updateQuantity(product.id, product.quantity + 1)
    }
}

const makeDecrementProductQuantity = (repository: SessionCartRepository) => async (id: number) => {
    const product = await repository.getProduct(id)

    if(product && product.quantity > 1) {
        repository.updateQuantity(product.id, product.quantity - 1)
    }
}

export { makeIncrementProductQuantity, makeDecrementProductQuantity }