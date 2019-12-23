import validate from 'validate.js'

const product = {
    name: {
        presence: true
    },
    suplier: {
        presence: true
    },
    dimensions: {
        presence: true
    },
    weight: {
        presence: true
    },
    price_buy: {
        presence: true
    },
    price_sell: {
        presence: true
    },
    quantity: {
        presence: true
    },
    images: {
        presence: true
    },
    categories: {},
    description: {},
    details: {},
    related: {}
}

const updateOptions = {
    id: {
        presence: true
    },
    ...product
}

const insertOptions = { ...product }

export const validateInsert = (user: any) => validate(user, insertOptions) ? { success: false, data: validate(user, insertOptions) } : { success: true };

export const validateUpdate = (user: any) => validate(user, updateOptions) ? { success: false, data: validate(user, updateOptions) } : { success: true };

