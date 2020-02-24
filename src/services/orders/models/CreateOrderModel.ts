interface CreateOrderModel {
    user_profile_id: number,
    shipping_address_name: string
    shipping_address_street: string
    shipping_address_number: string
    shipping_address_complement: string | null,
    shipping_address_postal_code: string
    shipping_address_city: string
    shipping_address_state: string
    shipping_address_country: string
    billing_address_name: string
    billing_address_street: string
    billing_address_number: string
    billing_address_complement: string | null,
    billing_address_postal_code: string
    billing_address_city: string
    billing_address_state: string
    billing_address_country: string
}

export { CreateOrderModel }