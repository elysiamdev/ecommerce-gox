import { getUserCartFromSession } from '../services/getUserCartFromSession'

const useCart = (requestHandler: Function) => (req: any, res: any, next: any) => {
    let user_cart

    user_cart = getUserCartFromSession(req.session)

    req.user_cart = user_cart
    requestHandler(req, res, next)
}

export default useCart

