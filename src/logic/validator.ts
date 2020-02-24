import validate from 'validate.js'
import knex from '../server/db'

import { cpf } from 'cpf-cnpj-validator'

validate.validators.cpf = function (value: any, options: any, key: any, attributes: any) {
    if(cpf.isValid(value, true)) {
        return null
    }
    return "inválido"
}

validate.validators.addressExist = async function (value: any, options: any, key: any, attributes: any) {
    if(Number.isInteger(value?.id)) {
        const found = await knex('addresses').where('id', value?.id).first()
        if(found) {
            return null
        }
        return `${value.id} não existe`
    }

    return `${value.id} é inválido`
}

validate.validators.productsExist = async function (value: any, options: any, key: any, attributes: any) {
    if(Array.isArray(value)) {
        const ids = value.map(p => p.id)
        try {
            const foundIds = await knex.select('id').from('products').whereIn('id', ids).map((p: any )=> p.id)
            const foundIdsSet = new Set(foundIds)

            const diff = ids.filter(id => !foundIdsSet.has(id))            
            if(diff.length === 0) {
                return null
            }

            return diff.reduce((acc, value) => `${acc}, ${value}`) + ' don\'t exist'
        }
        finally {
        }
    }

    return `${value} é inválido`
}

export default validate