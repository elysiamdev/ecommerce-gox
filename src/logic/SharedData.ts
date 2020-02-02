class SharedData {
    readonly values: any = {}

    add(storeKey: string, values: object) {
        this.values[storeKey] = values
    }

    getFromStoreKey(storeKey: string) {
        return this.values[storeKey]
    }

    toJson() {
        return JSON.stringify(this.values)
    }
}

export { SharedData }