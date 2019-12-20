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