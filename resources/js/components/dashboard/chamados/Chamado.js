import {Chamado as getChamado} from '../../../hooks';

const Chamado = (id) => {

  const setListObservacao = (data) => {
    let lista = document.getElementById('listObservacao');
    let paragrafo

    for (let i = 0; i < data.length; i++) {
      lista.innerHtml += `<p>${data[i].DS_DESCRICA}</p>`;
    }

  }

  const setChamado = (data) => {
    document.getElementById('inputCodigo').value = data.ID_CHAMADO;
    document.getElementById('inputCriador').value = data.criador.NM_USUARIO;
    document.getElementById('inputDtCriacao').value = data.DT_CRIACAO;
    document.getElementById('inputDtAbertura').value = data.DT_ABERTURA;
    document.getElementById('inputDtEncerramento').value = data.DT_ENCERRAMENTO;
    document.getElementById('inputStatus').value = data.DM_STATUS;
    document.getElementById('inputEmpresa').value = data.empresa.NM_RAZAO_SOCIAL;
    document.getElementById('inputProduto').value = data.produto.NM_PRODUTO;
    document.getElementById('inputAssunto').value = data.assunto.DS_ASSUNTO;
    document.getElementById('inputVersao').value = data.DS_VERSAO_PRODUTO;
    document.getElementById('inputConcluido').value = data.PORCENTUALDECONCLUSAO;
    document.getElementById('inputSolucao').value = data.DS_SOLUCAO;
    document.getElementById('inputResumo').value = data.DS_REDUZIDA;

    setListObservacao(data.observacoes);
  }

  const startSelects = async () => {
    let data

    data = await getChamado(id);

    setChamado(data);


    console.log(data);
  }

  const load = () => {
    startSelects();
  }

  window.addEventListener('load', load);
}

export default Chamado;
