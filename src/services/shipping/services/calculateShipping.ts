import { CorreiosClient } from "../http/CorreiosClient"

/**
 * http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx
 * ?${url}sCepOrigem=92035012
 * &sCepDestino=${cep}
 * &nVlPeso=${peso}
 * &nCdFormato=1
 * &nVlComprimento=${comprimento}
 * &nVlAltura=${altura}
 * &nVlLargura=${largura}
 * &sCdMaoPropria=n
 * &nVlValorDeclarado=${valorVenda}
 * &sCdAvisoRecebimento=n
 * &nCdServico=${serviceType}
 * &nVlDiametro=0
 * &StrRetorno=xml
 * &nIndicaCalculo=3
 */
const calculateShippingCost = async (postal_code: string, products: any) => {
    const client = new CorreiosClient()
    // build params then calculate
    // const result client.calculate(params)
    // return the price
}

export { calculateShippingCost }