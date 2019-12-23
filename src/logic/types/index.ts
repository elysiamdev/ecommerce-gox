export type TResponse = {
    success?: boolean;
    data?: any;
    url?: string;
    message?: string[]
}

export type TTableObject = any;

export type TJwtToken = {
    isProtected: boolean,
    data: any,
}


export type TEmailOptions = {
    link: string,
    imageUrl: string,
    title: string
}
