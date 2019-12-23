import validate from 'validate.js'

const updateOptions = {
    id: {
        presence: true
    },
    first_name: {
        presence: true
    },
    last_name: {
        presence: true
    },
    password: {
        presence: true,
        length: {
            minimum: 6,
            message: "Password must be at least 6 characters"
        }
    },
    email: {
        presence: true,
        email: true
    },
    role: {
        presence: true
    }
}

const insertOptions = {

    first_name: {
        presence: true
    },
    last_name: {
        presence: true
    },
    password: {
        presence: true,
        length: {
            minimum: 6,
            message: "Password must be at least 6 characters"
        }
    },
    email: {
        presence: true,
        email: true
    },
    role: {
        presence: true
    }
}

export const validateInsert = (user: any) => validate(user, insertOptions) ? { success: false, data: validate(user, insertOptions) } : { success: true };
export const validateUpdate = (user: any) => validate(user, updateOptions) ? { success: false, data: validate(user, updateOptions) } : { success: true };
