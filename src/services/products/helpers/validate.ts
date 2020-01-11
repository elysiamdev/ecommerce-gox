import validate from 'validate.js'

const product = {
    name: {
        presence: true
    },
    supplier: {
        presence: true
    },
    especifications: {
        presence: true
    },
    details: {
        presence: true
    },
    description: {
        presence: true
    },
    quantity: {
        presence: true
    },
    related_ids: {
        presence: true
    },
    categories_ids: {
        presence: true
    },
    images: {
        presence: true
    },
    price_buy: {
        presence: true
    },
    price_sell: {
        presence: true
    }
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

