import { OrderAddress } from "./OrderAddress"
import { OrderProduct } from "./OrderProduct"

interface Order {
    readonly id: number
    readonly reference: string
    readonly addresses: { shippingAddress: OrderAddress, billingAddress: OrderAddress }
    readonly products: Array<OrderProduct>
}

export { Order }