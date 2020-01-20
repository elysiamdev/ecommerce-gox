import { AppError, ErrorCode } from './AppError'

class NotFoundError extends AppError {
    constructor(message: string, context: object) {
        super(ErrorCode.NotFound, message, context)
    }
}

export { NotFoundError }