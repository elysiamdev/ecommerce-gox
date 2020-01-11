import { UserProfileRepository, UserLocalCredentialsRepository } from "@services/users/db/repositories"

class UnitOfWork {
    private trx: any
    private knex: any
    private initialized: boolean = false
    UserProfileRepository?: UserProfileRepository
    UserLocalCredentialsRepository?: UserLocalCredentialsRepository

    private ensureInitialized(): void {
        if(!this.isInitialized()) {
            throw new Error('UnitOfWork should be initialized first.')
        }
    }

    constructor(knex: any) {
        this.knex = knex
    }

    async initialize() {
        const provider = this.knex.transactionProvider()
        this.trx = await provider()

        this.UserProfileRepository = new UserProfileRepository(this.trx)
        this.UserLocalCredentialsRepository = new UserLocalCredentialsRepository(this.trx)
        this.initialized = true
    }

    isInitialized(): boolean {
        return this.initialized
    }

    getUserProfileRepository(): UserProfileRepository {
        this.ensureInitialized()

        return this.UserProfileRepository as UserProfileRepository
    }

    getUserLocalCredentialsRepository(): UserLocalCredentialsRepository {
        this.ensureInitialized()

        return this.UserLocalCredentialsRepository as UserLocalCredentialsRepository
    }

    commit() {
        this.trx.commit()
    }

    rollback() {
        this.trx.rollback()
    }
}

export { UnitOfWork }