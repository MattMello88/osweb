import {Chamado as getChamado} from '../../../hooks';
import {renderGrid} from '../../utils';

const Chamado = (id) => {

  const setListObservacao = (data) => {
    let lista = document.getElementById('listObservacao');
    lista.innerHTML = "";
    for (let i = 0; i < data.length; i++) {
      lista.innerHTML +=
        `<li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">${data[i].usuario.NM_USUARIO}</div>
            ${data[i].DS_DESCRICAO}
          </div>
          <span class="badge bg-primary rounded-pill">${data[i].DT_OBSERVACAO}</span>
        </li>
        `;
    }

  }

  const setGridTramite = (data) => {
    renderGrid(
      [
        {
          name: 'Status',
          sort: {
            enabled: true
          },
          formatter: (cell, row) => {
            return gridjs.html(
              `<span
                  class='badge rounded-pill bg-${((cell == '0') ? 'secondary' : (cell == '1') ? 'primary' : 'success')}'
                  data-bs-toggle='tooltip'
                  data-bs-html='true'
                  title='${((cell == '0') ? 'Não Iniciada' : (cell == '1') ? 'Iniciada' : 'Encerrada')}'
                >${((cell == '0') ? 'n' : (cell == '1') ? 'i' : 'e')}
                </span>`
            );
          }
        },{
          name: 'Código',
          sort: {
            enabled: true
          },
          formatter: (cell, row) => {
            return gridjs.h('a', {
              className: 'link-primary',
              href: `${url}/dashboard/chamado/${cell}`,
            }, cell);
          }
        },{
          name: 'Assunto',
        }
      ],
      data,
      document.getElementById('tab-tramite'),
      10,
      false );
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
    document.getElementById('inputDsChamado').innerText = data.DS_CHAMADO;
    document.getElementById('inputSolucao').innerText = data.DS_SOLUCAO;

    setListObservacao(data.observacoes);
    setGridTramite(data.tramites);
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
