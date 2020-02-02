import { cartHandler } from "@services/site/request_handlers"

class SessionCartRepository {
    readonly session: any

    constructor(session: any) {
        this.session = session
    }

    addProduct(product: any) {
        if(!this.session.user_cart) {
            this.session.user_cart = { items: []}
        }

        if(!this.exists(product.id))
            this.session.user_cart.items.push(product)
    }

    exists(id: number) {
        const found = this.getProduct(id)

        if(found) {
            return true
        }
        return false
    }

    updateQuantity(id: number, quantity: number) {
        if(this.session.user_cart?.items) {
            this.session.user_cart.items = this
                    .session
                    .user_cart
                    .items
                    .map((cartProduct: any) => {
                        if(cartProduct.id == id) {
                            cartProduct.quantity = quantity
                        }
                        return cartProduct
                    })
        }

    }

    getProduct(id: number) {
        if(this.session.user_cart) {
            const product = this
                .session
                .user_cart
                .items
                .filter((cartProduct: any) => cartProduct.id == id)
            if(product.length == 1)
                return product[0]
        }
        return null
    }

    removeProduct(id: number) {
        if(this.session.user_cart?.items) {
            this.session.user_cart.items = this
                .session
                .user_cart
                .items
                .filter((cartProduct: any) => cartProduct.id != id)
        }
    }
}

export { SessionCartRepository }