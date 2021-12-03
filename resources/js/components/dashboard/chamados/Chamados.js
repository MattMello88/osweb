import {gridDataByForm} from '../../requests';
import {EmpresaProdutos, Empresas, AssuntoByProduto} from '../../../hooks';

const Chamados = () => {

  const getSeletEmpresa = () => {
    let dropdown;
    let option;
    let data;

    if (!sessionStorage.getItem("dataEmpresas")){
      data = Empresas();
      sessionStorage.setItem("dataEmpresas", data)
    } else {
      data = sessionStorage.getItem("dataEmpresas");
    }

    dropdown = document.getElementById("inputEmpresa");
    for (let i = 0; i < data.length; i++) {
      option = document.createElement('option');
      option.text = data[i].NM_RAZAO_SOCIAL;
      option.value  = data[i].ID_EMPRESA;
      dropdown.add(option);
    }
    dropdown.selectedIndex = 0;
  }

  const getProduto = async (event) => {
    let ID_EMPRESA = event.target.value;

    let data = await EmpresaProdutos(ID_EMPRESA);

    let dropdown = document.getElementById("inputProduto");
    dropdown.options.length = 0;
    let option;
    option = document.createElement('option');
    option.text = 'Selecione um Produto';
    dropdown.add(option);

    for (let i = 0; i < data.length; i++) {
      option = document.createElement('option');
      option.text = data[i].produto.NM_PRODUTO;
      option.value  = data[i].produto.ID_PRODUTO;
      dropdown.add(option);
    }
    dropdown.selectedIndex = 0;
  }

  const getAssunto = (event) => {
    let ID_PRODUTO = event.target.value;

    let data = AssuntoByProduto(ID_PRODUTO);

    let dropdown = document.getElementById("inputAssunto");
    dropdown.options.length = 0;
    let option;
    option = document.createElement('option');
    option.text = 'Selecione um Assunto';
    dropdown.add(option);

    for (let i = 0; i < data.length; i++) {
      option = document.createElement('option');
      option.text = data[i].DS_ASSUNTO;
      option.value  = data[i].ID_ASSUNTO;
      dropdown.add(option);
    }
    dropdown.selectedIndex = 0;
  }

  const loadChamados = () => {
    getSeletEmpresa();
  }

  const submit = (event) => {
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
          name: 'Cód.',
          sort: {
            enabled: true
          },
          formatter: (cell, row) => {
            return gridjs.h('a', {
              className: 'link-primary',
              href: `${url}/dashboard/chamado/${cell}`,
            }, 'Editar');
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
        console.log(data);
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
  };

  window.addEventListener('load', loadChamados);

  document.getElementById('formOsChamadoFiltro').addEventListener('submit', submit);
  document.getElementById('inputEmpresa').addEventListener('change', getProduto);
  document.getElementById('inputProduto').addEventListener('change', getAssunto);

}

export default Chamados;

