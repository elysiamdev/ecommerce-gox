const checkoutHandler = async (req: any, res: any, next: any) => {
    const { action } = req.body

    switch(action.type) {
        case 'VERIFY_EMAIL':
            return verifyEmail(req, res, next)
        case 'VALIDATE_SHIPPING_ADDRESS':
            return validateShippingAddress(req, res, next)
    }
}

const verifyEmail = async (req: any, res: any, next: any) => {
    res.status(200).send()   
}

const validateShippingAddress = async (req: any, res: any, next: any) => {
    res.status(200).send()
}

export { checkoutHandler }