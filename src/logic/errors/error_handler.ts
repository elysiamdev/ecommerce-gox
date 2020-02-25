import { mapErrorToHttpErrorCode, AppError } from "./AppError"

const errorHandler = (error: Error, req: any, res: any, next: any) => {
    console.log(error)

    if(error instanceof AppError) {
        res.status(mapErrorToHttpErrorCode(error.code))
            .send({
                message: error.message,
                context: error.context
            })
    }
    else {
        res.status(500)
            .send({
                message: 'Erro interno no servidor.'
            })
    }
}

export { errorHandler }