export type Order = {
    id?: string;
    client_id: string;
    total: string;
    date: string;
    obs: string;
    tracking: string;
    products: string;
}
export type Orders = Array<Order>