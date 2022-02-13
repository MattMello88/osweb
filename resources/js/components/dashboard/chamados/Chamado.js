import {Chamado as getChamado, FuncionarioUsuarios as getFuncionarios, Tramite as getTramite} from '../../../hooks';
import {gridDataByForm, getDataByForm, sendData} from '../../requests';
import {alert} from '../../utils';

const Chamado = (id) => {

  const modalTramiteEdt = async (event) => {
    let data = await getFuncionarios();

    createSelect(
      "Selecione uma Funcionário",
      "inputFuncionarioEdt",
      data,
      "NM_USUARIO",
      "ID_USUARIO",
      "");

      var button = event.relatedTarget
      // Extract info from data-bs-* attributes
      var id_tramite = button.getAttribute('data-id-tramite')
      
      let tramite = await getTramite(id_tramite);

      
      let action = document.getElementById("formTramiteEdt").setAttribute("action", `${url}/api/ostramite/${tramite.ID_TRAMITE}`);
      
      document.getElementById("inputTramiteIdEdt").value = tramite.ID_TRAMITE;
      document.getElementById("inputDmStatusEdt").value = tramite.DM_STATUS;
      document.getElementById("inputFuncionarioEdt").value = tramite.ID_USUARIO_RESPONSAVEL;
      document.getElementById("inputPrioridadeEdt").value = tramite.NR_PRIORIDADE;

      document.getElementById("inputReduzidaEdt").value = tramite.DS_REDUZIDA;
      document.getElementById("inputDsTramiteEdt").value = tramite.DS_TRAMITE;
      document.getElementById("inputDsSolucaoEdt").value = tramite.DS_SOLUCAO;

      console.log(tramite);
  }

  const submitEdtTramite = (event) => {
    if (event !== undefined)
      event.preventDefault();
      
    document.getElementById("list-tramite-clear").innerHTML = "";

    sendData(
      document.getElementById('formTramiteEdt'),
      async function(data){
        console.log(data)
        await startSelects();

        var myModal = bootstrap.Modal.getInstance(document.getElementById('modalTramiteAdd'));
        myModal.toggle();

      },
      function(err){
        console.log(err)
        alert('alertAdd', 'Falha ao alterar um novo tramite.', 'warning');
      }
    );
  }

  const submitAddTramite = (event) => {
    if (event !== undefined)
      event.preventDefault();
      
    document.getElementById("list-tramite-clear").innerHTML = "";

    sendData(
      document.getElementById('formTramiteAdd'),
      async function(data){
        await startSelects();

        var myModal = bootstrap.Modal.getInstance(document.getElementById('modalTramiteAdd'));
        myModal.toggle();

        document.getElementById('inputFuncionarioAdd').selectedIndex = 0;
        document.getElementById('inputPrioridadeAdd').selectedIndex = 0;
        document.getElementById("inputReduzidaAdd").value = "";
        document.getElementById("inputDsTramiteAdd").value = "";
      },
      function(err){
        alert('alertAdd', 'Falha ao criar um novo tramite.', 'warning');
      }
    );
  }

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

  const modalTramiteAdd = async () => {
    let data = await getFuncionarios();

    createSelect(
      "Selecione uma Funcionário",
      "inputFuncionarioAdd",
      data,
      "NM_USUARIO",
      "ID_USUARIO",
      "");
  }

  const submit = async (event) => {
    if (event !== undefined)
      event.preventDefault();
      
    document.getElementById("list-tramite-clear").innerHTML = "";

    sendData(
      document.getElementById('formObservacaoAdd'),
      async function(data){
        await startSelects();

        var myModal = bootstrap.Modal.getInstance(document.getElementById('modalNovaObservacao'));
        myModal.toggle();

        document.getElementById("inputDescricaoAdd").value = "";
      },
      function(err){
        alert('alertAdd', 'Falha ao criar uma nova observação.', 'warning');
      }
    );

  };

  const onsubmitChamadoStatus = (event) => {
    if (event !== undefined)
        event.preventDefault();

    var dm_status = document.getElementById('inputChangeStatus').value;
    dm_status = dm_status == '0' ? '1' : (dm_status == '1' ? '2' : '3');
    document.getElementById('inputChangeStatus').value = dm_status;

    if (dm_status == '2')
      document.getElementById('btnStatus').disabled = true;

    sendData(
      document.getElementById('formChamadoStatus'),
      function(data){
        console.log(data)
        dm_status = document.getElementById('inputChangeStatus').value;
        document.getElementById('btnStatus').innerText = dm_status == '0' ? 'Iniciar' : (dm_status == '1' ? 'Encerrar' : 'Encerrado');
        if (dm_status == '2')
          document.getElementById('btnStatus').disabled = true;
      },
      function(err){
        console.log(data)
        dm_status = document.getElementById('inputChangeStatus').value;
        dm_status = dm_status == '3' ? '2' : (dm_status == '2' ? '1' : '0');
        document.getElementById('inputChangeStatus').value = dm_status;
        document.getElementById('btnStatus').innerText = dm_status == '0' ? 'Iniciar' : (dm_status == '1' ? 'Encerrar' : 'Encerrado');
      }
    );
  }

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
    var userList = new List('tableTramite', 
      {
        valueNames:["status","codigo","situacao","prioridade","dsresumida","responsavel","criador","dtinicio","dtfim","tempAtend"],
        item: 
          `<tr>
            <td class="status"></td>
            <td class="codigo"></td>
            <td class="situacao"></td>
            <td class="prioridade"></td>
            <td class="dsresumida"></td>
            <td class="responsavel"></td>
            <td class="criador"></td>
            <td class="dtinicio"></td>
            <td class="dtfim"></td>
            <td class="tempAtend"></td>
          </tr>`,
        page:5,
        pagination:true
      }, 
      data.map(ostramite =>
        (
          {
            status: 
              `<span
                class='badge rounded-pill bg-${((ostramite.DM_STATUS == '0') ? 'secondary' : (ostramite.DM_STATUS == '1') ? 'primary' : 'success')}'
                data-bs-toggle='tooltip'
                data-bs-html='true'
                title='${((ostramite.DM_STATUS == '0') ? 'Não Iniciada' : (ostramite.DM_STATUS == '1') ? 'Iniciada' : 'Encerrada')}'
              >${((ostramite.DM_STATUS == '0') ? 'n' : (ostramite.DM_STATUS == '1') ? 'i' : 'e')}
              </span>`,
            codigo: `<a href="#" class="link-primary" data-id-tramite="${ostramite.ID_TRAMITE}" data-bs-toggle="modal" data-bs-target="#modalTramiteEdt">${ostramite.ID_TRAMITE}</a>`,
            situacao: `${((ostramite.DM_SITUACAO == '0') ? '' : 
                            (ostramite.DM_SITUACAO == '1') ? 'Encerrado com sucesso' : 
                              (ostramite.DM_SITUACAO == '2') ? 'Encerrado com erro' : 
                                (ostramite.DM_SITUACAO == '3') ? 'Encerrado com observações' : '')}`,
            prioridade: (ostramite.NR_PRIORIDADE  == '2' ? 'Baixa': ostramite.NR_PRIORIDADE == '1' ? 'Média' : 'Alta'),
            dsresumida: ostramite.DS_REDUZIDA,
            responsavel: ostramite.responsavel.NM_USUARIO,
            criador: ostramite.criador.NM_USUARIO,
            dtinicio: ostramite.DT_INICIO,
            dtfim: ostramite.DT_FIM,
            tempAtend: ostramite.DM_ATENDIMENTO,
          }
        )
      )    
    );
  }

  const setGridAnexo = (data) => {
    var userList = new List('tableAnexo', 
      {
        valueNames:["codigo","nome"],
        item: 
          `<tr>
            <td class="codigo"></td>
            <td class="nome"></td>
          </tr>`,
        page:5,
        pagination:true
      }, 
      data.map(osanexo =>
        (
          {
            codigo: `<a href="${url}/dashboard/download/${osanexo.ID_ANEXO}" class="link-primary">${osanexo.ID_ANEXO}</a>`,
            nome: osanexo.DS_ARQUIVO_ORIGINAL,
          }
        )
      )    
    );
  }

  const setChamado = (data) => {
    document.getElementById('inputCodigo').value = data.ID_CHAMADO;
    document.getElementById('inputCriador').value = data.criador.NM_USUARIO;
    document.getElementById('inputDtCriacao').value = data.DT_CRIACAO;
    document.getElementById('inputDtAbertura').value = data.DT_ABERTURA;
    document.getElementById('inputDtEncerramento').value = data.DT_ENCERRAMENTO;
    document.getElementById('inputStatus').value = data.DM_STATUS == '0' ? 'Não Iniciado' : (data.DM_STATUS == '1' ? 'Iniciado' : 'Encerrado');
    document.getElementById('inputEmpresa').value = data.empresa.NM_RAZAO_SOCIAL;
    document.getElementById('inputProduto').value = data.produto.NM_PRODUTO;
    document.getElementById('inputAssunto').value = data.assunto.DS_ASSUNTO;
    document.getElementById('inputVersao').value = data.DS_VERSAO_PRODUTO;
    document.getElementById('inputConcluido').value = data.PORCENTUALDECONCLUSAO;
    document.getElementById('inputSolucao').value = data.DS_SOLUCAO;
    document.getElementById('inputResumo').value = data.DS_REDUZIDA;
    document.getElementById('inputDsChamado').innerText = data.DS_CHAMADO;
    document.getElementById('inputSolucao').innerText = data.DS_SOLUCAO;

    /** Botão de Status */
    document.getElementById('btnStatus').innerText = data.DM_STATUS == '0' ? 'Iniciar' : (data.DM_STATUS == '1' ? 'Encerrar' : 'Encerrado');
    if (data.DM_STATUS == '2')
      document.getElementById('btnStatus').disabled = true;

    document.getElementById('inputChangeStatus').value = data.DM_STATUS;
    document.getElementById('inputChangeIdChamado').value = data.ID_CHAMADO;
    /** Fim */

    setListObservacao(data.observacoes);
    setGridTramite(data.tramites);
    setGridAnexo(data.anexos);
  }

  const startSelects = async () => {
    let data

    data = await getChamado(id);

    setChamado(data);
  }

  const load = () => {
    startSelects();

    var usuario = JSON.parse(getCookie('usuario'));
    document.getElementById('NomeCriadorObs').innerText = usuario.NM_USUARIO;
    document.getElementById('NomeCriadorTramite').innerText = usuario.NM_USUARIO;
    document.getElementById('NomeEditorTramite').innerText = usuario.NM_USUARIO;
  }

  /**
   *  Modal Add Tramite
   */
  document.getElementById('modalTramiteAdd').addEventListener('shown.bs.modal', modalTramiteAdd);
  document.getElementById('formTramiteAdd').addEventListener('submit', submitAddTramite);

  /**
   *  Modal Edt Tramite
   */
   document.getElementById('modalTramiteEdt').addEventListener('shown.bs.modal', modalTramiteEdt);
   document.getElementById('formTramiteEdt').addEventListener('submit', submitEdtTramite);
   

  /**
   *  Submit
   */
  document.getElementById('formObservacaoAdd').addEventListener('submit', submit);
  document.getElementById('formChamadoStatus').addEventListener('submit', onsubmitChamadoStatus);

  /**
   *  Carregar
   */
  window.addEventListener('load', load);
}

export default Chamado;
