type TObjectKeys = Array<string>;

export const cleanValidate = (data: any) => {
    let objectKeys: TObjectKeys = Object.keys(data);
    let response: string[] = objectKeys.map(item => {
        return data[item]
    })
    return response
}

