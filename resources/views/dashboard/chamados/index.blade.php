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
          name: 'Id',
          sort: {
            enabled: true
          }
        },
        {
          name: 'Brand',
          sort: {
            enabled: true
          }
        },
        {
          name: 'Nome',
          sort: {
            enabled: true
          }
        },
        {
          name: 'Preço',
          sort: {
            enabled: true
          }
        }],
        server: {
          method: "GET",
          url: 'https://makeup-api.herokuapp.com/api/v1/products.json',
          then: data => data.map(produto =>
            [produto.id, produto.brand, produto.name, produto.price]
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
