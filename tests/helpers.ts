import knex from '../src/server/db'
import { makeRegisterUser } from '@services/users/services/registerUser'
import { makeCreateUserProfile, makeCreateUserLocalCredentials } from '@services/users/services'
import { UserProfileRepository, UserLocalCredentialsRepository } from '@services/users/db/repositories'

const produtcs_seed = [
    { name: 'Asa de Mosca Gigante',
        slug: 'asa-de-mosca-gigante',
            description: 'Quando usada, teleporta todos os membros do grupo para uma mesma localidade aleatória. Apenas o líder do grupo pode usar este item, do contrário o item será gasto e não surtirá efeito.',
            images: '',
            buy_value: 70,
            sell_value: 70 },
    { name: 'Asa de Mosca',
            slug: 'asa-de-mosca',
            description: `Par de asas de mosca encantadas com magia.
            Dê clique duplo neste item para ser transportar até um local aleatório no mapa.`,
            images: '',
            buy_value: 70,
            sell_value: 70 },
    { name: 'Carta Creamy',
        slug: 'carta-creamy',
            description: `Carta de Creamy. Permite o uso da habilidade 'Teleporte' em nível 1.`,
            images: '',
            buy_value: 70,
            sell_value: 70 },
    { name: 'Vestimenta Divina',
        slug: 'vestimenta-divina',
            description: `Um traje sagrado, produzido por uma série de rituais religiosos.
            5% de tolerância adicional a ataques de amaldiçoar, silenciar, atordoar, dormir e petrificar.`,
            images: '',
            buy_value: 70,
            sell_value: 70 },
    { name: 'Armadura das Valquírias',
        slug: 'armadura-das-valquirias',
            description: `Um brilhante conjunto de armadura usada pelas Valquírias, as donzelas guerreiras que servem ao deus Odin.
            Indestrutível em batalha.
            Todos os atributos +1.
            Magos, Noviços, Arqueiros e evoluções:
            Tolerância a [Silêncio] +50%.
            Espadachins, Mercadores, Gatunos e evoluções:
            Tolerância a [Atordoamento] +50%.`,
            images: '',
            buy_value: 70,
            sell_value: 70 },
    { name: 'Carta Golem Estalactítico',
        slug: 'carta-golem-estalactitico',
            description: `DEF +1.
            Tolerância a Atordoamento +20%.`,
            images: '',
            buy_value: 70,
            sell_value: 70 },
    { name: 'Chapéu de Ninho',
        slug: 'chapeu-de-ninho',
            description: `Um ninho de pássaros recém saídos dos ovos. Desperte seu instinto maternal e cuide deles com carinho.
            DES +1, AGI +1.
            Concede 10% de resistência contra [Atordoamento].`,
            images: '',
            buy_value: 70,
            sell_value: 70 },
]

const seedTables = async () => {
    await knex('products')
        .insert(produtcs_seed)

    await knex('address_types')
            .insert([
                    { name: 'Endereço de Cobrança'},
                    { name: 'Endereço de Entrega'}
            ])

    const createUser = makeRegisterUser(makeCreateUserProfile(new UserProfileRepository(knex)), makeCreateUserLocalCredentials(new UserLocalCredentialsRepository(knex), (p: string) => p))
    const user = await createUser({ fullname: "Um Usuário", cpf: "715.583.180-89", email: "test@test.com", password: "abc123456", confirm: "abc123456"})
    await knex('addresses').insert([
        {
            name: "Um Usuário",
            street: "Rua de teste",
            number: "123",
            city: "Test City",
            state: "State of Testing",
            country: "Testland",
            postal_code: "99999-999",
            user_profile_id: user?.id
        },
        {
            name: "Um Usuário Endereço2",
            street: "Rua de teste",
            number: "456",
            city: "Test City",
            state: "State of Testing",
            country: "Testland",
            postal_code: "99999-999",
            user_profile_id: user?.id
        },
    ])
    
    knex('orders').insert({ 
        reference: "TEST_ORDER_123", 
        user_profile_id: user?.id,
        shipping_address_name: "Um Usuário",
        shipping_address_street: "Rua de teste",
        shipping_address_number: "123",
        shipping_address_city: "Test City",
        shipping_address_state: "State of Testing",
        shipping_address_country: "Testland",
        shipping_address_postal_code: "99999-999",
        billing_address_name: "Um Usuário Endereço2",
        billing_address_street: "Rua de teste",
        billing_address_number: "456",
        billing_address_city: "Test City",
        billing_address_state: "State of Testing",
        billing_address_country: "Testland",
        billing_address_postal_code: "99999-999",
    }).then((order: any) => knex('orders_products').insert(
        { 
            order_id: order?.id,
            product_id: 1,
            quantity: 1
        }
    ))
}

const clearDb = (table: string) => {
    return knex.raw(`TRUNCATE TABLE ${table} RESTART IDENTITY CASCADE`)
}

export { seedTables, clearDb }