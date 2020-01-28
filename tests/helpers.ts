import knex from '../src/server/db'

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
    
}

const clearDb = (table: string) => {
    return knex.raw(`TRUNCATE TABLE ${table} RESTART IDENTITY CASCADE`)
}

export { seedTables, clearDb }