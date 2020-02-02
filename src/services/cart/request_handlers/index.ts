import { makeAddProductIntoCart } from "../services/addProductIntoCart"
import { SessionCartRepository } from "../repositories/SessionCartRepository"
import { makeRemoveProductFromCart } from "../services/removeProductFromCart"
import { InputValidationError } from "@logic/errors"
import { makeIncrementProductQuantity, makeDecrementProductQuantity } from "../services/incrementProductQuantity"

const addToCartHandler = async (req: any, res: any, next: any) => {
    const { product } = req.body
    const addProductIntoCart = makeAddProductIntoCart(new SessionCartRepository(req.session))
    addProductIntoCart(product)

    res.status(204).send()
}

const removeProductFromCartHandler = async (req: any, res: any, next: any) => {
    const { id } = req.params
    const removeProductFromCart = makeRemoveProductFromCart(new SessionCartRepository(req.session))
    removeProductFromCart(id)

    res.status(200).send({ products: req.session.user_cart.items })
}

const updateProductQuantityHandler = async (req: any, res: any, next: any) => {
    const { id } = req.params
    const { action } = req.body
    const incrementProductQuantity = makeIncrementProductQuantity(new SessionCartRepository(req.session))
    const decrementProductQuantity = makeDecrementProductQuantity(new SessionCartRepository(req.session))
    
    switch(action.type) {
        case 'INCREMENT_QUANTITY':
            await incrementProductQuantity(id)
            res.status(200).send({ products: req.session.user_cart.items })
            break
        case 'DECREMENT_QUANTITY':
            await decrementProductQuantity(id)
            res.status(200).send({ products: req.session.user_cart.items })
            break
        default:
            throw new InputValidationError("Invalid action type", { action })
    }
}

export { addToCartHandler,
    removeProductFromCartHandler, updateProductQuantityHandler }