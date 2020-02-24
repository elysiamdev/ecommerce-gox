import { UserProfileRepository, UserLocalCredentialsRepository, AddressRepository } from "../services/users/db/repositories"
import { OrdersRepository, OrdersProductsRepository } from "../services/orders/repositories"

class UnitOfWork {
    private trx: any
    private knex: any
    private initialized: boolean = false
    UserProfileRepository: UserProfileRepository
    UserLocalCredentialsRepository: UserLocalCredentialsRepository
    UserAddressRepository: AddressRepository
    OrdersRepository: OrdersRepository
    OrdersProductsRepository: OrdersProductsRepository

    constructor(trx: any) {
        this.trx = trx
        this.UserProfileRepository = new UserProfileRepository(this.trx)
        this.UserLocalCredentialsRepository = new UserLocalCredentialsRepository(this.trx)
        this.OrdersRepository = new OrdersRepository(this.trx)
        this.UserAddressRepository = new AddressRepository(this.trx)
        this.OrdersProductsRepository = new OrdersProductsRepository(this.trx)
    }

    commit() {
        this.trx.commit()
    }

    rollback() {
        this.trx.rollback()
    }
}

export { UnitOfWork }