import {gridDataByForm} from '../../requests';
import {EmpresaProdutos, Empresas, AssuntosByProduto} from '../../../hooks';

const Chamados = () => {

  const createSelect = (selectText, idInput, data, fieldText, fieldValue, sessionId) => {
    let dropdown = document.getElementById(idInput);
    dropdown.options.length = 0;

    let option = document.createElement('option');
    option.text = selectText;
    dropdown.add(option);

    for (let i = 0; i < data.length; i++) {
      option = document.createElement('option');
      if (fieldText.includes('.')){
        let campos;
        campos = fieldText.split('.');
        option.text = data[i][campos[0]][campos[1]];
        campos = fieldValue.split('.');
        option.value  = data[i][campos[0]][campos[1]];
      } else {
        option.text = data[i][fieldText];
        option.value  = data[i][fieldValue];
      }

      dropdown.add(option);
    }

    if (sessionStorage.getItem(sessionId))
      dropdown.value = sessionStorage.getItem(sessionId);
    else
      dropdown.selectedIndex = 0;
  }

  const startSelects = async () => {
    let data

    if (sessionStorage.getItem("selectID_CHAMADO")){
      document.getElementById('inputCodigo').value = sessionStorage.getItem("selectID_CHAMADO");
    }

    if (sessionStorage.getItem("selectDT_ABERTURA")){
      document.getElementById('inputDtAbertura').value = sessionStorage.getItem("selectDT_ABERTURA");
    }

    if (sessionStorage.getItem("selectDT_ENCERRAMENTO")){
      document.getElementById('inputDtFinal').value = sessionStorage.getItem("selectDT_ENCERRAMENTO");
    }

    if (sessionStorage.getItem("selectDM_STATUS")){
      document.getElementById('inputStatus').value = sessionStorage.getItem("selectDM_STATUS");
    } else {
      document.getElementById('inputStatus').selectedIndex = 1;
    }

    if (sessionStorage.getItem("selectID_EMPRESA")){
      data = await Empresas();

      createSelect(
        "Selecione uma Empresa",
        "inputEmpresa",
        data,
        "NM_RAZAO_SOCIAL",
        "ID_EMPRESA",
        "selectID_EMPRESA");

      let ID_EMPRESA = sessionStorage.getItem("selectID_EMPRESA");
      data = await EmpresaProdutos(ID_EMPRESA);

      createSelect(
        "Selecione um Produto",
        "inputProduto",
        data,
        "produto.NM_PRODUTO",
        "produto.ID_PRODUTO",
        "selectID_PRODUTO");

      if (sessionStorage.getItem("selectID_PRODUTO")){


        let ID_PRODUTO = sessionStorage.getItem("selectID_PRODUTO");
        data = await AssuntosByProduto(ID_PRODUTO);

        createSelect(
          "Selecione um Assunto",
          "inputAssunto",
          data,
          "DS_ASSUNTO",
          "ID_ASSUNTO",
          "selectID_ASSUNTO");
      }

    } else {
      getSeletEmpresa();
    }

    submit();
  }

  const getSeletEmpresa = async () => {
    let data;

    data = await Empresas();

    createSelect(
      "Selecione uma Empresa",
      "inputEmpresa",
      data,
      "NM_RAZAO_SOCIAL",
      "ID_EMPRESA",
      "selectID_EMPRESA");

  }

  const getProduto = async (event) => {
    let data
    let ID_EMPRESA = event.target.value;

    sessionStorage.removeItem('selectID_PRODUTO');
    sessionStorage.removeItem('selectID_ASSUNTO');

    data = await EmpresaProdutos(ID_EMPRESA);

    createSelect(
      "Selecione um Produto",
      "inputProduto",
      data,
      "produto.NM_PRODUTO",
      "produto.ID_PRODUTO",
      "selectID_PRODUTO");

    document.getElementById("inputAssunto").options.length = 1;

  }

  const getAssunto = async (event) => {
    let data;
    let ID_PRODUTO = event.target.value;

    sessionStorage.removeItem('selectID_ASSUNTO');

    data = await AssuntosByProduto(ID_PRODUTO);

    createSelect(
      "Selecione um Assunto",
      "inputAssunto",
      data,
      "DS_ASSUNTO",
      "ID_ASSUNTO",
      "selectID_ASSUNTO");
  }

  const setSessionInputsValue = () => {
    sessionStorage.setItem("selectID_CHAMADO", document.getElementById('inputCodigo').value);
    sessionStorage.setItem("selectDT_ABERTURA", document.getElementById('inputDtAbertura').value);
    sessionStorage.setItem("selectDT_ENCERRAMENTO", document.getElementById('inputDtFinal').value);
    sessionStorage.setItem("selectDM_STATUS", document.getElementById('inputStatus').value);
    sessionStorage.setItem("selectID_EMPRESA", document.getElementById('inputEmpresa').value);
    sessionStorage.setItem("selectID_PRODUTO", document.getElementById('inputProduto').value);
    sessionStorage.setItem("selectID_ASSUNTO", document.getElementById('inputAssunto').value);
  }

  const doLimparCampo = () => {
    sessionStorage.removeItem('selectID_EMPRESA');
    sessionStorage.removeItem('selectID_PRODUTO');
    sessionStorage.removeItem('selectID_ASSUNTO');
    sessionStorage.removeItem('selectID_CHAMADO');
    sessionStorage.removeItem('selectDT_ABERTURA');
    sessionStorage.removeItem('selectDT_ENCERRAMENTO');
    sessionStorage.removeItem('selectDM_STATUS');
    sessionStorage.removeItem('selectID_ASSUNTO');

    document.getElementById('inputCodigo').value = '';
    document.getElementById('inputDtAbertura').value = '';
    document.getElementById('inputDtFinal').value = '';

    document.getElementById('inputStatus').selectedIndex = 1;
    document.getElementById('inputEmpresa').selectedIndex = 0;
    document.getElementById('inputProduto').options.length = 1;
    document.getElementById('inputAssunto').options.length = 1;
  }

  const submit = (event) => {
    if (event !== undefined)
      event.preventDefault();
    document.getElementById("wrapper").innerHTML = "";

    gridDataByForm(
      document.getElementById('formOsChamadoFiltro'),
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
        },{
          name: 'Cliente',
          sort: {
            enabled: true
          }
        },{
          name: 'Criador',
        },{
          name: 'Responsável',
        },{
          name: 'Dt. Abertura',
          sort: {
            enabled: true
          }
        },{
          name: 'Prioridade',
          sort: {
            enabled: true
          }
        },{
          name: 'Dt. Entrega',
          sort: {
            enabled: true
          }
        },{
          name: 'Des. Resumida',
        }
      ],
      function (data) {
        return data.map(oschamado =>
          [
            oschamado.DM_STATUS,
            oschamado.ID_CHAMADO,
            oschamado.assunto.DS_ASSUNTO,
            oschamado.empresa.NM_FANTASIA,
            oschamado.criador.NM_USUARIO,
            oschamado.usuario.NM_USUARIO,
            oschamado.DT_ABERTURA,
            oschamado.NR_PRIORIDADE  == '2' ? 'Alta': oschamado.NR_PRIORIDADE == '1' ? 'Média' : 'Baixa',
            oschamado.DT_DATA_DESEJAVEL_DE_ENTREGA,
            oschamado.DS_REDUZIDA,
          ]
        )
      },

      document.getElementById("wrapper"),
      10,
      false
    );

    setSessionInputsValue();
  };

  const loadChamados = () => {
    startSelects();
  }

  document.getElementById('formOsChamadoFiltro').addEventListener('submit', submit);
  document.getElementById('inputEmpresa').addEventListener('change', getProduto);
  document.getElementById('inputProduto').addEventListener('change', getAssunto);
  document.getElementById('btnLimpar').addEventListener('click', doLimparCampo);

  window.addEventListener('load', loadChamados);
}

export default Chamados;
