import jwt, { sign } from "jsonwebtoken";
import { apiSecret } from "config";
import { TJwtToken, TResponse } from "@logic/types";
import { userByEmail } from "@services/users";



export const verifyToken = (token: string) => new Promise<TJwtToken>((resolve: Function) => (
    jwt.verify(
        token,
        apiSecret,
        (err: any, data: any) =>
            err ? resolve({ isProtected: false }) : resolve({ isProtected: true, data: data }))
))

export const ensureToken = (req: any, res: any, next: any) => {
    const bearerHeader = req.headers["authorization"]
    if (bearerHeader) {
        const bearer = bearerHeader.split(' ')
        const bearerToken = bearer[1];
        req.token = bearerToken;
        next()
    }
    else {
        res.sendStatus(403)
    }
}

export const signIn = async (credentials: any) => {
    let { email, password } = credentials;
    let response: TResponse = await userByEmail(email)
    let signResponse: TResponse;
    if (response.success) {
        let { data } = response;
        if (data.password === password) {
            signResponse = {
                success: true,
                message: ['Login successfull!'],
                url: '/',
                data: {
                    token: jwt.sign({ user: data }, apiSecret)
                }
            }
            return signResponse;
        }
        else {
            signResponse = {
                success: false,
                message: ['Wrong password']
            }
            return signResponse
        }
    }
    else {
        return response;
    }

}

export const signUp = (userData: any) => {

}

export default { signIn }