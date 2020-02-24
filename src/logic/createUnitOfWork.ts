import { UnitOfWork } from "./UnitOfWork"

function createUnitOfWork(knex: any): () => Promise<UnitOfWork> {
    return async function () {
        const provider = knex.transactionProvider()
    const trx = await provider()

    const unitOfWork = new UnitOfWork(trx)

    return unitOfWork
    }
}

export { createUnitOfWork }