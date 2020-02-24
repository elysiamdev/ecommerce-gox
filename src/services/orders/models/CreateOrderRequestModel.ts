interface CreateOrderRequestModel {
    shipping_address: { id: number},
    use_shipping_address: boolean,
    billing_address: { id: number } | null,
    products: Array<{ id: number, quantity: number }>,
}

export { CreateOrderRequestModel }