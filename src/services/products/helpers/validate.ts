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

export const validateInsert = (user: any) => validate(user, insertOptions) ? validate(user, insertOptions) : false;

export const validateUpdate = (user: any) => validate(user, updateOptions) ? validate(user, updateOptions) : false;

