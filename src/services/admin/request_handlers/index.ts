import { insertItem, retrieveItem } from '../index'

interface IHttpExpress {
    (req: any, res: any, next: any): any
}
export const inserRequestHandler: IHttpExpress = async (req, res, next) => {
    let data = req.body.siteData;
    console.log(data, 'line 8')
    let response = await insertItem(data);
    res.json(response)
}

export const getDataRequestHandler: IHttpExpress = async (req, res, next) => {
    const response = await retrieveItem()
    res.json(response)
}

export const signRequestHandler: IHttpExpress = (req, res, next) => {

    let { email, password } = req.body;
    console.log(req.body)
    let isLoginOk = email === 'admin@gox.com.br' && password === '665566'
    res.json({
        success: isLoginOk,
        data: 'a3sdf13as2df1a3s5df746as76df87asdfo8sadf',
        messages: isLoginOk ? ['You are logged in now'] : ['Email or password are not right']
    })
}