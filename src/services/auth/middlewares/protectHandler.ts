
const protectHandler = (req: any, res: any, next: any) => {
    if(req.user) {
        next()
    }
    else {
        res.redirect('/login')
    }
}

export { protectHandler }