type TObjectKeys = Array<string>;

export const cleanValidate = (data: any) => {
    let objectKeys: TObjectKeys = Object.keys(data);
    let response: string[] = objectKeys.map(item => {
        return data[item]
    })
    return response
}

export const scapeRouter = (item: string) => {
    let scapeRoutes = ['mailer', '.DS_Store', 'index.js']
    let scapeFiles = ['index.ts', 'index.js']
    return (scapeRoutes.indexOf(item) === -1) && (scapeFiles.indexOf(item) === -1)
}