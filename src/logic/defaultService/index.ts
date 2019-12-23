class ServiceActions {
    private validate: any;
    private clientDb: any;
    private serviceName: string;

    constructor(serviceName: string, clientDb: any, validate: any) {
        this.validate = validate;
        this.clientDb = clientDb;
        this.serviceName = serviceName;
    }
}