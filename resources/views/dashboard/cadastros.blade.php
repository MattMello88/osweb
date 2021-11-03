@extends('layouts.main')

@section('title', 'Cadastros')

@section('sub-nav')
      <header>
        <div class="bg-info text-white shadow">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="#" class="nav-link text-muted">
                    Segmentos
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    Empresa
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    Produto
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
                    Usuário
                  </a>
                </li>
                <li>
                  <a href="#" class="nav-link text-white">
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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastros</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
@endsection


