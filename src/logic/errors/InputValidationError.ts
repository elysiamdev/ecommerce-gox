import { AppError, ErrorCode } from './AppError'

class InputValidationError extends AppError {
    constructor(message: string, context: object) {
        super(ErrorCode.InvalidInput, message, context)
    }
}

export { InputValidationError }