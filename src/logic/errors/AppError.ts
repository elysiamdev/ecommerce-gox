enum ErrorCode {
    NotFound = 10404,
    InvalidInput = 10400
}

const mapErrorToHttpErrorCode = (code: ErrorCode) => {
    switch(code) {
        case ErrorCode.NotFound: return 404
        case ErrorCode.InvalidInput: return 400
        default:
            throw Error('ErrorCode não existe')
    }
}

class AppError extends Error {
    public readonly code: ErrorCode
    public readonly context: object

    constructor(code: ErrorCode, message: string, context: object){
        super(message)
        this.code = code
        this.context = context
        Error.captureStackTrace(this)
    }
}

export { AppError, ErrorCode, mapErrorToHttpErrorCode }