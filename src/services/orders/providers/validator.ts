import validate from '../../../logic/validator'
import { CreateOrderRequestModel } from '../models'

async function validadeCreateOrderRequestModel(model: CreateOrderRequestModel) {
    const options = {
        shipping_address: {
            presence: { allowEmpty: false },
            addressExist: true
        },
        use_shipping_address: {
            presence: { allowEmpty: false },
            type: "boolean"
        },
        billing_address: function(value: any, attributes: any, attributeName: any, options: any, constraints: any) {
            if(attributes.use_shipping_address) {
                return null
            }

            return {
                presence: { allowEmpty: false },
                addressExist: true
            }
        },
        products: {
            presence: { allowEmpty: false },
            length: {
                minimum: 1
            },
            productsExist: true
        }
    }

    const productOptions = {
        id: {
            presence: { allowEmpty: false },
            type: "number"
        },
        quantity: {
            presence: { allowEmpty: false },
            numericality: {
                greaterThan: 0,
                onlyInteger: true
            }
        }
    }

    const validationResult = await validate.async(model, options)
    if(validationResult) {
        return { isValid: false, errors: validationResult }
    }

    const productsValidationResult = model.products.map((p) => validate(p, productOptions))
    if(productsValidationResult && productsValidationResult[0]) {
        return { isValid: false, errors: { products: productsValidationResult }} 
    }

    return { isValid: true }
}

export { validadeCreateOrderRequestModel }