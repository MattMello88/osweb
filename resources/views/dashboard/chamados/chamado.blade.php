@extends('layouts.main')

@section('title', 'Chamados')



@section('content')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Chamado {{$id}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">

            <a href="javascript:history.back()" rule="button" class="btn btn-outline-secondary">
              <i class="bi bi-arrow-left-square" style="font-size: 1.1rem;"></i>
              Voltar
            </a>
            <button type="button" class="btn btn-outline-secondary">
              <i class="bi bi-lock" style="font-size: 1.1rem;"></i>
              Encerrar
              <span data-feather="calendar"></span>
            </button>
          </div>
        </div>
      </div>

      <div class="card p-0">
        <div class="card-header bg-primary text-dark bg-opacity-10">
          Featured
        </div>
        <div class="card-body">
          <form class="row g-3">

            <div class="row col-12 pt-2">
              <div class="col-sm-4 col-md-4">
                <label for="inputCodigo" class="form-label">Código</label>
                <input type="number" class="form-control form-control-sm" id="inputCodigo" disabled>
              </div>
              <div class="col-sm-8 col-md-8">
                <label for="inputCriador" class="form-label">Criador</label>
                <input type="text" class="form-control form-control-sm" id="inputCriador" disabled>
              </div>
            </div>
            <div class="row col-12 pt-2">
              <div class="col-sm-4 col-md-4">
                <label for="inputDtCriacao" class="form-label">Data Criação</label>
                <input type="text" class="form-control form-control-sm" id="inputDtCriacao" disabled>
              </div>

              <div class="col-sm-4 col-md-4">
                <label for="inputDtAbertura" class="form-label">Data Abertura</label>
                <input type="text" class="form-control form-control-sm" id="inputDtAbertura" disabled>
              </div>

              <div class="col-sm-4 col-md-4">
                <label for="inputDtEncerramento" class="form-label">Data Encerramento</label>
                <input type="text" class="form-control form-control-sm" id="inputDtEncerramento" disabled>
              </div>
            </div>

            <div class="row col-12 pt-2">
              <div class="col-sm-4 col-md-4 col-lg-2">
                <label for="inputStatus" class="form-label">Status</label>
                <input type="text" class="form-control form-control-sm" id="inputStatus" disabled>
              </div>
              <div class="col-sm-12 col-md-8 col-lg-5">
                <label for="inputEmpresa" class="form-label">Empresa</label>
                <input type="text" class="form-control form-control-sm" id="inputEmpresa" disabled>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-5">
                <label for="inputProduto" class="form-label">Produto</label>
                <input type="text" class="form-control form-control-sm" id="inputProduto" disabled>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4">
                <label for="inputAssunto" class="form-label">Assunto</label>
                <input type="text" class="form-control form-control-sm" id="inputAssunto" disabled>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <label for="inputVersao" class="form-label">Versão</label>
                <input type="text" class="form-control form-control-sm" id="inputVersao" disabled>
              </div>

              <div class="col-sm-6 col-md-6 col-lg-4">
                <label for="inputConcluido" class="form-label">Concluído</label>
                <input type="text" class="form-control form-control-sm" id="inputConcluido" disabled>
              </div>
            </div>
          </form>

          <nav class="pt-4">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-desc-prod-tab" data-bs-toggle="tab" data-bs-target="#nav-desc-prod" type="button" role="tab" aria-controls="nav-desc-prod" aria-selected="true">Descrição Problema</button>
              <button class="nav-link" id="nav-tramite-tab" data-bs-toggle="tab" data-bs-target="#nav-tramite" type="button" role="tab" aria-controls="nav-tramite" aria-selected="false">Tramite</button>
              <button class="nav-link" id="nav-anexo-tab" data-bs-toggle="tab" data-bs-target="#nav-anexo" type="button" role="tab" aria-controls="nav-anexo" aria-selected="false">Anexo</button>
              <button class="nav-link" id="nav-solucao-tab" data-bs-toggle="tab" data-bs-target="#nav-solucao" type="button" role="tab" aria-controls="nav-solucao" aria-selected="false">Solução</button>
            </div>
          </nav>
          <div class="tab-content m-3" id="nav-tabContent" >
            <div class="tab-pane fade show active" id="nav-desc-prod" role="tabpanel" aria-labelledby="nav-desc-prod-tab">
              <div class="row col-12 pb-4">
                <div class="col-sm-12 col-md-8 col-lg-5">
                  <label for="inputResumo" class="form-label">Resumo</label>
                  <input type="text" class="form-control form-control-sm" id="inputResumo" disabled>
                </div>
              </div>
              <div class="col-12" >
                <ol class="list-group list-group-numbered" id="listObservacao">
                </ol>
              </div>

              <div class="py-4">
                <a href="#">Nova Observação</a>
              </div>

              <p id="inputDsChamado">Descrição completa do chamado</p>
            </div>
            <div class="tab-pane fade" id="nav-tramite" role="tabpanel" aria-labelledby="nav-tramite-tab">

              <button type="button" class="btn btn-outline-primary mb-4">
                <i class="bi bi-file-text" style="font-size: 1.1rem;"></i>
                  Adicionar
              </button>

              <div id="tab-tramite"></div>

            </div>
            <div class="tab-pane fade" id="nav-anexo" role="tabpanel" aria-labelledby="nav-anexo-tab">
              <div class="mb-3">
                <label for="formFileSm" class="form-label">Anexar Arquivo</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
              </div>

              <div class="table-responsive">
                <div id="tab-anexo"></div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-solucao" role="tabpanel" aria-labelledby="nav-solucao-tab">
              <div class="card">
                <div class="card-body" id="inputSolucao">
                  This is some text within a card body.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection


@section('script')
<script>
  let id = `{{$id}}`;
  pgChamados.Chamado(id);
    /*new gridjs.Grid({
      columns: [
        {
          name: 'Status',
        },
        {
          name: 'Código',
        },
        {
          name: 'Situação',
        },
        {
          name: 'Prioridade',
        },
        {
          name: 'Ds. Resumida',
        },
        {
          name: 'Responsável',
        },
        {
          name: 'Criador',
        },
        {
          name: 'Dt. Inicio',
        },
        {
          name: 'Dt. Fim',
        },
        {
          name: 'Tempo Atendimento',
        }
        ],
      data: [
        ["John", "john@example.com", "(353) 01 222 3333", "john@example.com","John", "john@example.com", "(353) 01 222 3333", "john@example.com", "John", "john@example.com"],
        ["Mark", "mark@gmail.com", "(01) 22 888 4444", "john@example.com","John", "john@example.com", "(353) 01 222 3333", "john@example.com", "John", "john@example.com"],
        ["Eoin", "eoin@gmail.com", "0097 22 654 00033", "john@example.com","John", "john@example.com", "(353) 01 222 3333", "john@example.com", "John", "john@example.com"],
        ["Sarah", "sarahcdd@gmail.com", "+322 876 1233", "john@example.com","John", "john@example.com", "(353) 01 222 3333", "john@example.com", "John", "john@example.com"],
        ["Afshin", "afshin@mail.com", "(353) 22 87 8356", "john@example.com","John", "john@example.com", "(353) 01 222 3333", "john@example.com", "John", "john@example.com"],
        ["John", "john@example.com", "(353) 01 222 3333", "john@example.com","John", "john@example.com", "(353) 01 222 3333", "john@example.com", "John", "john@example.com"],
        ["Mark", "mark@gmail.com", "(01) 22 888 4444", "john@example.com","John", "john@example.com", "(353) 01 222 3333", "john@example.com", "John", "john@example.com"],
        ["Eoin", "eoin@gmail.com", "0097 22 654 00033", "john@example.com","John", "john@example.com", "(353) 01 222 3333", "john@example.com", "John", "john@example.com"],
        ["Sarah", "sarahcdd@gmail.com", "+322 876 1233", "john@example.com","John", "john@example.com", "(353) 01 222 3333", "john@example.com", "John", "john@example.com"],
        ["Afshin", "afshin@mail.com", "(353) 22 87 8356", "john@example.com","John", "john@example.com", "(353) 01 222 3333", "john@example.com", "John", "john@example.com"],
      ],
      sort: true,
      resizable: true,
      pagination: {
        limit: 10,
      },
      className: {
        td: 'p-1 fs-6 fw-light',
      }
    }).render(document.getElementById("tab-tramite"));

    new gridjs.Grid({
      columns: [
        { name: "Código",width:'30%', minWidth: '150px'},
        { name: 'Nome', width:'100%', minWidth: '200px'}
      ],
      data: [
        ["John", "john@example.com"],
        ["Mark", "mark@gmail.com"],
        ["Eoin", "eoin@gmail.com"],
        ["Sarah", "sarahcdd@gmail.com"],
        ["Afshin", "afshin@mail.com"],
        ["John", "john@example.com"],
        ["Mark", "mark@gmail.com"],
        ["Eoin", "eoin@gmail.com"],
        ["Sarah", "sarahcdd@gmail.com"],
        ["Afshin", "afshin@mail.com"],
      ],
      width:'500px',
      minWidth: '350px',
      pagination: {
        limit: 10,
      },
      className: {
        td: 'p-1 fs-6 fw-light',
      }
    }).render(document.getElementById("tab-anexo"));*/
  </script>
@endsection
