@extends('layouts.main')

@section('title', 'Chamados')

@section('sub-nav')
      <header>
        <div class="bg-info text-white shadow">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <ul class="nav col-12 col-lg-auto justify-content-center text-small">
                <li>
                  <a href="#" class="nav-link text-muted">
                    Chamados
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Chamados</h1>
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
                    <label for="inputAddress" class="form-label">Data Inicial</label>
                    <input type="date" class="form-control form-control-sm" id="inputAddress" placeholder="1234 Main St">
                  </div>
                
                  <div class="col-sm-12 col-md-6">
                    <label for="inputAddress2" class="form-label">Data Final</label>
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
@endsection


