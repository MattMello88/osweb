@extends('layouts.main')

@section('title', 'Chamados')

@section('sub-nav')
      <header>
        <div class="bg-info text-white shadow" id="myTab" role="tablist">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <ul class="nav nav-pills col-12 col-lg-auto justify-content-center text-small">
                <li>
                  <a href="#" class="nav-link active" id="chamados-tab" data-bs-toggle="tab" data-bs-target="#chamados" type="button" role="tab" aria-controls="chamados" aria-selected="true">
                    Chamados
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link" id="tramites-tab" data-bs-toggle="tab" data-bs-target="#tramites" type="button" role="tab" aria-controls="tramites" aria-selected="false">
                    Tramites
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </header>
@endsection

@section('content')
  <div class="tab-content" id="myTabContent">
    @include('dashboard.chamados.chamados-include')
    @include('dashboard.chamados.tramites-include')
  </div>
@endsection


@section('script')
<script>
    new gridjs.Grid({
      columns: [
        {
          name: 'Status',
          sort: {
            enabled: true
          }
        },{
          name: 'Cód.',
          sort: {
            enabled: true
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
        }],
        server: {
          method: "GET",
          headers: [
            ["Accept", "application/json"],
            ["Authorization", "Bearer " + token],
          ],
          url: url + '/api/oschamado',
          then: data => data.map(oschamado =>
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
      pagination: {
        limit: 20,
      },
      search: {
        enabled: true
      }
    }).render(document.getElementById("wrapper"));


    document.getElementById('formOsChamadoFiltro').addEventListener('submit', function(event){
      //gridData('')
    });
  </script>
@endsection
