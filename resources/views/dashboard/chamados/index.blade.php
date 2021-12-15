@extends('layouts.main')

@section('title', 'Chamados')

@section('content')
  <div class="tab-content">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Chamados</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" class="btn btn-outline-secondary">
            <i class="bi bi-file-text" style="font-size: 1.1rem;"></i>
            Novo
          </button>
          <button type="button" class="btn btn-outline-secondary">
            <i class="bi bi-file-pdf" style="font-size: 1.1rem;"></i>
            Relatório
            <span data-feather="calendar"></span>
          </button>
        </div>
      </div>
    </div>

    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Filtro
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body bg-white">
            <form class="row g-3" action="{{url('/api/oschamado')}}" method="GET" id="formOsChamadoFiltro">

              <div class="row col-12 pt-2">
                <div class="col-sm-12 col-md-12">
                  <label for="inputCodigo" class="form-label">Código</label>
                  <input type="number" class="form-control form-control-sm" id="inputCodigo" name="ID_CHAMADO">
                </div>
              </div>
              <div class="row col-12 pt-2">
                <div class="col-sm-12 col-md-6">
                  <label for="inputDtAbertura" class="form-label">Data Abertura</label>
                  <input type="date" class="form-control form-control-sm" id="inputDtAbertura" name="DT_ABERTURA">
                </div>

                <div class="col-sm-12 col-md-6">
                  <label for="inputDtFinal" class="form-label">Data Final Abertura</label>
                  <input type="date" class="form-control form-control-sm" id="inputDtFinal" name="DT_ENCERRAMENTO">
                </div>
              </div>

              <div class="row col-12 pt-2">
                <div class="col-sm-12 col-md-4 col-lg-2">
                  <label for="inputStatus" class="form-label">Status</label>
                  <select id="inputStatus" class="form-select form-select-sm" name="DM_STATUS">
                    <option selected>Selecione Status</option>
                    <option value="0">Não Iniciado</option>
                    <option value="1">Iniciado</option>
                    <option value="2">Encerrado</option>
                  </select>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-5">
                  <label for="inputEmpresa" class="form-label">Empresa</label>
                  <select id="inputEmpresa" class="form-select form-select-sm" name="ID_EMPRESA">
                    <option selected>Selecione uma Empresa</option>
                  </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                  <label for="inputProduto" class="form-label">Produto</label>
                  <select id="inputProduto" class="form-select form-select-sm" name="ID_PRODUTO">
                    <option selected>Selecione um Produto</option>
                  </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-2">
                  <label for="inputAssunto" class="form-label">Assunto</label>
                  <select id="inputAssunto" class="form-select form-select-sm" name="ID_ASSUNTO">
                    <option selected>Selecione um Assunto</option>
                  </select>
                </div>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-primary">Filtrar</button>
                <button type="button" id="btnLimpar" class="btn btn-primary">Limpar</button>
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="pt-5" id="wrapper"></div>

  </div>
@endsection


@section('script')
<script>
  pgChamados.Chamados();
</script>
@endsection
