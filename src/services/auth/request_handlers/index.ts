import { IHttpExpress } from "@logic/interfaces";
import { signIn } from "../services";

export const signInRequest: IHttpExpress = async (req, res, next) => {
    let data: any = req.body;
    let response = await signIn(data)
    res.json(response).status(200)
}