
interface CorreiosRequestParams {
    sCepOrigem: string,
    sCepDestino: string,
    nVlPeso: number,
    nCdFormato: number,
    nVlComprimento: number,
    nVlAltura: number,
    nVlLargura: number,
    sCdMaoPropria: string,
    nVlValorDeclarado: number,
    sCdAvisoRecebimento: string,
    nCdServico: number,
    nVlDiametro: number,
    StrRetorno: string,
    nIndicaCalculo: number
}

export { CorreiosRequestParams }