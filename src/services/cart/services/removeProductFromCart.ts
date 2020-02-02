import { SessionCartRepository } from "../repositories/SessionCartRepository"

const makeRemoveProductFromCart = (repository: SessionCartRepository) => (id: number) => {
    repository.removeProduct(id)
}

export { makeRemoveProductFromCart }