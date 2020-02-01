import validate from 'validate.js'

export const validateProfile = (profile: { fullname: string }): { isValid: boolean, errors: {}} => {
    const options = {
        fullname: {
            presence: { allowEmpty: false },
        },
    }

    const validationResult = validate(profile, options)

    if(validationResult) {
        return { isValid: false, errors: validationResult }
    }
    return { isValid: true, errors: {}}
}

export const validateLocalCredentials = (credentials: { email: string, password: string, confirm: string}): { isValid: boolean, errors: {}} => {
    const options = {
        email: {
            presence: { allowEmpty: false },
            email: true
        },
        password: {
            presence: { allowEmpty: false },
            length: {
                minimum: 6
            }
        },
        confirm: {
            presence: { allowEmpty: false },
            equality: "password"
        }
    }

    const validationResult = validate(credentials, options)

    if(validationResult) {
        return { isValid: false, errors: validationResult }
    }
    return { isValid: true, errors: {}}
}

export const validateUserAddress = 
    (address: { name: string, street: string, number: string, complement: string, postal_code: string, city: string, state: string, country: string }) => {
        const options = {
            name: {
                presence: { allowEmpty: false },
            },
            street: {
                presence: { allowEmpty: false },
            },
            number: {
                presence: { allowEmpty: false },
            },
            postal_code: {
                presence: { allowEmpty: false },
            },
            city: {
                presence: { allowEmpty: false },
            },
            state: {
                presence: { allowEmpty: false },
            },
            country: {
                presence: { allowEmpty: false },
            }
        }

        const validationResult = validate(address, options)

        if(validationResult) {
            return { isValid: false, errors: validationResult }
        }
        return { isValid: true, errors: {} }
    }
