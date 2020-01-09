import 'module-alias/register'
import buildServer from './server'

const server = buildServer()
const port: any = process.env.PORT || 4003

server.listen(port, () => {
    console.log(`listen on port ${port}`)
})