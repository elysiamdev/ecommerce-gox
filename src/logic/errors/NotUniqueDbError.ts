import { AppError, ErrorCode } from './AppError'

class NotUniqueDbError extends AppError {
    constructor(message: string, context: object) {
        super(ErrorCode.InvalidInput, message, context)
    }
}

export { NotUniqueDbError }