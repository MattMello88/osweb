@extends('layouts.main')

@section('title', 'Chamados')



@section('content')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Chamado {{$id}}</h1>
      </div>

      <div class="card p-0">
        <div class="card-header bg-primary text-dark bg-opacity-10">
          Featured
        </div>
        <div class="card-body">
          <form class="row g-3">

            <div class="row col-12 pt-2">
              <div class="col-sm-12 col-md-12">
                <label for="inputEmail4" class="form-label">Código</label>
                <input type="number" class="form-control form-control-sm" id="inputEmail4">
              </div>
              <div class="col-sm-12 col-md-12">
                <label for="inputEmail4" class="form-label">Criador</label>
                <input type="number" class="form-control form-control-sm" id="inputEmail4">
              </div>
            </div>
            <div class="row col-12 pt-2">
              <div class="col-sm-12 col-md-6">
                <label for="inputAddress" class="form-label">Data Criação</label>
                <input type="date" class="form-control form-control-sm" id="inputAddress" placeholder="1234 Main St">
              </div>

              <div class="col-sm-12 col-md-6">
                <label for="inputAddress2" class="form-label">Data Abertura</label>
                <input type="date" class="form-control form-control-sm" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>

              <div class="col-sm-12 col-md-6">
                <label for="inputAddress2" class="form-label">Data Encerramento</label>
                <input type="date" class="form-control form-control-sm" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
            </div>

            <div class="row col-12 pt-2">
              <div class="col-sm-12 col-md-4 col-lg-2">
                <label for="inputCity" class="form-label">Status</label>
                <input type="text" class="form-control form-control-sm" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="col-sm-12 col-md-8 col-lg-5">
                <label for="inputState" class="form-label">Empresa</label>
                <input type="text" class="form-control form-control-sm" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3">
                <label for="inputState" class="form-label">Produto</label>
                <input type="text" class="form-control form-control-sm" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="col-sm-12 col-md-6 col-lg-2">
                <label for="inputState" class="form-label">Versão</label>
                <input type="text" class="form-control form-control-sm" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="col-sm-12 col-md-6 col-lg-2">
                <label for="inputState" class="form-label">Assunto</label>
                <input type="text" class="form-control form-control-sm" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="col-sm-12 col-md-6 col-lg-2">
                <label for="inputState" class="form-label">Concluído</label>
                <input type="text" class="form-control form-control-sm" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
            </form>

          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-desc-prod-tab" data-bs-toggle="tab" data-bs-target="#nav-desc-prod" type="button" role="tab" aria-controls="nav-desc-prod" aria-selected="true">Descrição Problema</button>
              <button class="nav-link" id="nav-tramite-tab" data-bs-toggle="tab" data-bs-target="#nav-tramite" type="button" role="tab" aria-controls="nav-tramite" aria-selected="false">Tramite</button>
              <button class="nav-link" id="nav-anexo-tab" data-bs-toggle="tab" data-bs-target="#nav-anexo" type="button" role="tab" aria-controls="nav-anexo" aria-selected="false">Anexo</button>
              <button class="nav-link" id="nav-solucao-tab" data-bs-toggle="tab" data-bs-target="#nav-solucao" type="button" role="tab" aria-controls="nav-solucao" aria-selected="false">Solução</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-desc-prod" role="tabpanel" aria-labelledby="nav-desc-prod-tab">descrição problema</div>
            <div class="tab-pane fade" id="nav-tramite" role="tabpanel" aria-labelledby="nav-tramite-tab">tramite</div>
            <div class="tab-pane fade" id="nav-anexo" role="tabpanel" aria-labelledby="nav-anexo-tab">anexo</div>
            <div class="tab-pane fade" id="nav-solucao" role="tabpanel" aria-labelledby="nav-solucao-tab">solução</div>
          </div>
        </div>
      </div>

@endsection


