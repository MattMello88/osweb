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
    @include('dashboard.chamados.chamados')
    @include('dashboard.chamados.tramites')
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
          sort: {
            enabled: true
          }
        },{
          name: 'Cliente',
          sort: {
            enabled: true
          }
        },{
          name: 'Criador',
          sort: {
            enabled: true
          }
        },{
          name: 'Responsável',
          sort: {
            enabled: true
          }
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
          sort: {
            enabled: true
          }
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
              oschamado.ID_CRIADOR,
              oschamado.ID_RESPONSAVEL,
              oschamado.DT_ABERTURA,
              oschamado.NR_PRIORIDADE,
              oschamado.DT_DATA_DESEJAVEL_DE_ENTREGA,
              oschamado.DS_REDUZIDA,
            ]
          )
        },
      pagination: {
        limit: 15,
      },
      search: {
        enabled: true
      },
      data: [
        ["John", "john@example.com", "(353) 01 222 3333"],
        ["Mark", "mark@gmail.com", "(01) 22 888 4444"],
        ["Eoin", "eoin@gmail.com", "0097 22 654 00033"],
        ["Sarah", "sarahcdd@gmail.com", "+322 876 1233"],
        ["Afshin", "afshin@mail.com", "(353) 22 87 8356"],
        ["John", "john@example.com", "(353) 01 222 3333"],
        ["Mark", "mark@gmail.com", "(01) 22 888 4444"],
        ["Eoin", "eoin@gmail.com", "0097 22 654 00033"],
        ["Sarah", "sarahcdd@gmail.com", "+322 876 1233"],
        ["Afshin", "afshin@mail.com", "(353) 22 87 8356"],
      ]
    }).render(document.getElementById("wrapper"));
  </script>
@endsection
