export type Product = {
    id: string,
    name: string,
    suplier: string,
    dimensions: string,
    weight: string,
    price_buy: string,
    price_sell: string,
    quantity: string,
    images: string,
    categories: string,
    description: string,
    details: string,
    related: string
}
export type Products = Array<Product>