export type TUser = {
    id?: string;
    first_name: string;
    last_name: string;
    email: string;
    password: string;
    role: string;
}

export type TUsers = TUser[]