@extends('layouts.main')

@section('title', 'Cadastros')

@section('sub-nav')
      <header>
        <div class="bg-info text-white shadow" id="myTab" role="tablist">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <ul class="nav nav-pills col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="#" class="nav-link active" id="segmentos-tab" data-bs-toggle="tab" data-bs-target="#segmentos" type="button" role="tab" aria-controls="segmentos" aria-selected="true">
                    Segmentos
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link" id="empresas-tab" data-bs-toggle="tab" data-bs-target="#empresas" type="button" role="tab" aria-controls="empresas" aria-selected="false">
                    Empresas
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link" id="produtos-tab" data-bs-toggle="tab" data-bs-target="#produtos" type="button" role="tab" aria-controls="produtos" aria-selected="false">
                    Produtos
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link" id="usuarios-tab" data-bs-toggle="tab" data-bs-target="#usuarios" type="button" role="tab" aria-controls="usuarios" aria-selected="false">
                    Usuários
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link" id="templates-tab" data-bs-toggle="tab" data-bs-target="#templates" type="button" role="tab" aria-controls="templates" aria-selected="false">
                    Templates
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
      @include('dashboard.cadastros.segmentos')
      @include('dashboard.cadastros.empresas')
      @include('dashboard.cadastros.produtos')
      @include('dashboard.cadastros.usuarios')
      @include('dashboard.cadastros.templates')
    </div>
@endsection


