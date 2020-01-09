const settings: any = process.env;
export const rootPath = __dirname;
export const applicationName = '';
export const apiSecret = '<askld123--0ewe>'
export const defaultUrl = 'http://localhost:4003'
export const dbConfig = {
    local_database: {
        client: 'postgresql',
        connection: {
            host: settings.DB_HOST ? settings.DB_HOST : 'localhost',
            user: settings.DB_USER ? settings.DB_USER : 'eco',
            password: settings.DB_PASSWORD ? settings.DB_PASSWORD : "",
            database: settings.DATABASE ? settings.DATABASE : 'eco_dev'
        },
    },
    prod_database: {
        client: 'mysql',
        connection: {
            host: settings.PROD_DB_HOST,
            user: settings.PROD_DB_USER,
            password: settings.PROD_DB_PASSWORD,
            database: settings.PROD_DB_DATABASE
        },
    }
}