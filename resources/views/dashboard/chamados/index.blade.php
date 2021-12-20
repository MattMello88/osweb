@extends('layouts.main')

@section('title', 'Chamados')

@section('content')
  <div class="card mb-3">
    <div class="card-body position-relative">
    <div class="d-flex mb-2">
      <div>
        <h3>Chamados</h3>
      </div>
      <div class="ms-auto">
      <button class="btn btn-outline-primary me-1 mb-1" type="button">Nova OS</button>
      </div>
    </div>

      <div class="row">
        <div class="col-lg-8">
          
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body overflow-hidden p-lg-4">

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

      <div class="pt-4" id="wrapper"></div>


          <div id="tableExample" >
            <div class="table-responsive scrollbar">
              <table class="table table-bordered table-striped fs--1 mb-0">
                <thead class="bg-200 text-900">
                  <tr>
                    <th class="sort" data-sort="status">Status</th>
                    <th class="sort" data-sort="codigo">Código</th>
                    <th class="sort" data-sort="assunto">Assunto</th>
                    <th class="sort" data-sort="cliente">Cliente</th>
                    <th class="sort" data-sort="criador">Criador</th>
                    <th class="sort" data-sort="responsavel">Responsável</th>
                    <th class="sort" data-sort="dtabertura">Dt. Abertura</th>
                    <th class="sort" data-sort="prioridade">Prioridade</th>
                    <th class="sort" data-sort="dtentrega">Dt. Entrega</th>
                    <th class="sort" data-sort="dsresumida">Des. Resumida</th> 
                  </tr>
                </thead>
                <tbody class="list">
                </tbody>
              </table>
            </div>
            <div class="d-flex justify-content-center mt-3">
              <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
              <ul class="pagination mb-0"></ul>
              <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
            </div>
          </div>
    </div>
  </div>
@endsection


@section('script')
<script>
  pgChamados.Chamados();
</script>
@endsection
