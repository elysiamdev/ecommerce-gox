import { Totem } from "./models"

const listTotem = (req: any, res: any) => {
    res.send([
        new Totem(1, 'Totem 1', new Date()),
        new Totem(2, 'Totem 2', new Date()),
        new Totem(3, 'Totem 3', new Date()),
    ])
}

const readTotem = (req: any, res: any) => {
    res.send('Not implemented')
}
const createTotem = (req: any, res: any) => {
    const { fullname, created_at } = req.body
    const totem = new Totem(100, fullname, new Date())

    res.send(totem)
}


export { listTotem, readTotem, createTotem }