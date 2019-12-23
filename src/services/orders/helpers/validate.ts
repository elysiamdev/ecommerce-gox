import validate from 'validate.js'

const order = {
    client_id: {
        presence: true
    },
    total: {
        presence: true
    },
    status: {},
    obs: {},
    products: {
        presence: true
    },
    date: {
        presence: true
    },
    tracking: {},
}

const updateOptions = {
    id: {
        presence: true
    },
    ...order
}

const insertOptions = { ...order }

export const validateInsert = (user: any) => validate(user, insertOptions) ? { success: false, data: validate(user, insertOptions) } : { success: true };

export const validateUpdate = (user: any) => validate(user, updateOptions) ? { success: false, data: validate(user, updateOptions) } : { success: true };

