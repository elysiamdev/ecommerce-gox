class Totem {
    readonly id?: number
    fullname: string
    createdAt: Date

    constructor(id: number|undefined, fullname: string, createdAt: Date = new Date())
    {
        this.id = id
        this.fullname = fullname
        this.createdAt = createdAt
    }
}

export { Totem }