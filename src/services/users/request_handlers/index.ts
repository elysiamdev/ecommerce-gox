import knex from "@database/index"
import { UnitOfWork } from "@logic/UnitOfWork"
import { mapRequestBodyIntoRegisterRequestModel, mapRequestBodyIntoCreateUserAddressRequestModel } from "@services/site/mappers"
import { makeCreateUserProfile } from "../services/createUserProfile"
import { makeCreateUserLocalCredentials } from "../services/createUserLocalCredentials"
import { makeRegisterUser } from "../services/registerUser"
import { hashPassword } from "../services/hashPassword"
import { RegisterRequestModel } from "@services/site/models"
import { InputValidationError } from "@logic/errors"
import { makeCreateUserAddress } from "../services/createUserAddress"
import { AddressRepository } from "../db/repositories"
import { makeDeleteUserAddress } from "../services/deleteUserAddress"

const ensureAgreed = (registerRequest: RegisterRequestModel) => {
    if(!registerRequest.agreed) {
        throw new InputValidationError('Usuário não concordou com os termos', { errors: { agreed: ['Usuário não concordou com os termos']}})
    }
}

export const registerHandler = async (req: any, res: any, next: any) => {
    const unitOfWork = new UnitOfWork(knex)
    await unitOfWork.initialize()
    
    const registerRequestModel = mapRequestBodyIntoRegisterRequestModel(req.body)
    const createUserProfile = makeCreateUserProfile(unitOfWork.getUserProfileRepository())
    const createUserCredentials = makeCreateUserLocalCredentials(unitOfWork.getUserLocalCredentialsRepository(), hashPassword)
    const registerUser = makeRegisterUser(createUserProfile, createUserCredentials)

    try {
        ensureAgreed(registerRequestModel)

        const user = await registerUser(registerRequestModel)
    
        unitOfWork.commit()
        res.status(201).send(user)
    }
    catch(error) {
        unitOfWork.rollback()
        next(error)
    }
}

export const createAddressHandler = async (req: any, res: any, next: any) => {
    const createUserAddress = makeCreateUserAddress(new AddressRepository(knex))
    const createUserAddressRequestModel = mapRequestBodyIntoCreateUserAddressRequestModel(req.body)
    const userId = req.user.id

    try {
        const address = await createUserAddress(createUserAddressRequestModel, userId)

        res.status(201).send(address)
    }
    catch(error) {
        next(error)
    }
}

export const deleteAddressHandler = async (req: any, res: any, next: any) => {
    const deleteUserAddress = makeDeleteUserAddress(new AddressRepository(knex))
    const addressId  = req.params.id
    const userId = req.user.id

    try {
        if(deleteUserAddress(addressId, userId)) {
            res.status(204).send()
        }
        else {
            // algo deu errado?
        }
    }
    catch(error) {
        next(error)
    }
}