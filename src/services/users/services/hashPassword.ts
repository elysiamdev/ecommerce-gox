import bcrypt from 'bcrypt'

const saltRounds = process.env.NODE_ENV == 'production'? 12 : 0

const hashPassword = async (password: string): Promise<string> => {
    return await bcrypt.hash(password, saltRounds)
}

export { hashPassword }