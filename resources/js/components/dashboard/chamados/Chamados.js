import {gridDataByForm} from '../../requests';
import {getCookie} from '../../../auth';

const Chamados = () => {

  let token = getCookie("token");

  const getSeletEmpresa = () => {
    const headers = [
      ["Accept", "application/json"],
      ["Authorization", "Bearer " + token],
    ];

    fetch(url + '/api/osempresa', {
      method: "GET",
      headers: headers
    })
    .then(function(res){
      return res.json();
    })
    .then(function(data){
      let dropdown = document.getElementById("inputEmpresa");
      let option;
      for (let i = 0; i < data.length; i++) {
        option = document.createElement('option');
        option.text = data[i].NM_RAZAO_SOCIAL;
        option.value  = data[i].ID_EMPRESA;
        dropdown.add(option);
      }
      dropdown.selectedIndex = 0;
    })
    .catch(function(err){
      console.log(err)
    });
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

}

export default Chamados;

