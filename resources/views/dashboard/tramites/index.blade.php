@extends('layouts.main')

@section('title', 'Tramites')

@section('sub-nav')
  @include('layouts.sub-nav-chamado-include')
@endsection

@section('content')
  <div class="tab-content">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tramites</h1>
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
          <div class="accordion-body">
            <form class="row g-3">

              <div class="row col-12 pt-2">
                <div class="col-sm-12 col-md-12">
                  <label for="inputEmail4" class="form-label">Código</label>
                  <input type="number" class="form-control form-control-sm" id="inputEmail4">
                </div>
              </div>
              <div class="row col-12 pt-2">
                <div class="col-sm-12 col-md-6">
                  <label for="inputAddress" class="form-label">Data Abertura</label>
                  <input type="date" class="form-control form-control-sm" id="inputAddress" placeholder="1234 Main St">
                </div>

                <div class="col-sm-12 col-md-6">
                  <label for="inputAddress2" class="form-label">Data Final Abertura</label>
                  <input type="date" class="form-control form-control-sm" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
              </div>

              <div class="row col-12 pt-2">
                <div class="col-sm-12 col-md-4 col-lg-2">
                  <label for="inputCity" class="form-label">Status</label>
                  <select id="inputState" class="form-select form-select-sm">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-5">
                  <label for="inputState" class="form-label">Empresa</label>
                  <select id="inputState" class="form-select form-select-sm">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                  <label for="inputState" class="form-label">Produto</label>
                  <select id="inputState" class="form-select form-select-sm">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-2">
                  <label for="inputState" class="form-label">Assunto</label>
                  <select id="inputState" class="form-select form-select-sm">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-primary">Filtrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div id="wrapper"></div>

  </div>
@endsection


@section('script')
<script>
    /*new gridjs.Grid({
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
      style: {
        table: {
          'white-space': 'nowrap'
        }
      },
      pagination: {
        limit: 20,
      },
      search: {
        enabled: true
      }
    }).render(document.getElementById("wrapper")); */


    document.getElementById('formOsChamadoFiltro').addEventListener('submit', function(event){
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
      )
    });
  </script>
@endsection
