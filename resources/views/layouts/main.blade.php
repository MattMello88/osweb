<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>OS Web - Sistema de Chamado da Painel Fiscal - @yield('title')</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{ url('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

  <style>
    html {
      height: 100%;
    }

    body {
      height: 100%;
      font-size: .875rem;
    }

    main {
      display: flex;
      flex-wrap: nowrap;
      overflow-x: auto;
      overflow-y: hidden;
    }

    /*
    * Sidebar
    */
    .sidebar {
      position: fixed;
      top: 0;

      right: 0;

      bottom: 0;
      /* left:0;
      rtl:remove */

      z-index: 100; /* Behind the navbar */
      padding: 48px 0 0; /* Height of navbar */
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    @media (max-width: 767.98px) {
      .sidebar {
        top: 0rem;
      }
    }
    .sidebar .nav-link {
      font-weight: 500;
      color: #fff;
    }

    /*
    * Navbar
    */

    .navbar-brand {
      padding-top: .75rem;
      padding-bottom: .75rem;
      font-size: 1rem;
      background-color: rgba(0, 0, 0, .25);
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .navbar-toggler {
      top: .25rem;
      right: 1rem;
    }

    .navbar .form-control {
      padding: .75rem 1rem;
      border-width: 0;
      border-radius: 0;
    }

    .bi {
      vertical-align: -.125em;
      pointer-events: none;
      fill: currentColor;
    }

    .dropdown-toggle { outline: 0; }
  </style>
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark text-white flex-md-nowrap shadow py-0">
    <a href="/" class="  mb-md-0 me-md-auto text-white text-decoration-none">
      <i class="bi bi-clouds px-2" style="font-size: 2rem;"></i>
      <span class="fs-4">OS Web</span>
    </a>

    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav">
      <div class="nav-item ">
        <a class="nav-link px-3" href="#">Matheus</a>
      </div>
    </div>
  </header>


  <main>
    <!-- <div id="sidebarMenu" class="d-flex flex-column flex-shrink-0 p-3 text-white sidebar bg-dark collapse show" > -->
    <div id="sidebarMenu" class="col-md-3 col-lg-2 pt-5 bg-dark sidebar collapse" style="width: 280px;">
    <!-- gostei -->
    <!-- <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">  -->
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="{{url('dashboard')}}" class="nav-link active" aria-current="page">
            <i class="bi bi-house-door pe-2" style="font-size: 1.1rem;"></i>
            Dashboard
          </a>
        </li>
        <li>
          <a href="{{url('dashboard/chamados')}}" class="nav-link text-white">
            <i class="bi bi-book pe-2" style="font-size: 1.1rem;"></i>
            Chamados
          </a>
        </li>
        <li>
          <a href="{{url('dashboard/cadastros')}}" class="nav-link text-white">
            <i class="bi bi-receipt pe-2" style="font-size: 1.1rem;"></i>
            Cadastros
          </a>
        </li>
        <li>
          <a href="{{url('dashboard/relatorios')}}" class="nav-link text-white">
            <i class="bi bi-file-earmark-text pe-2" style="font-size: 1.1rem;"></i>
            Relatórios
          </a>
        </li>
      </ul>
      <hr class="text-white">
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">Configurações</a></li>
          <li><a class="dropdown-item" href="#">Perfil</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
      </div>
    </div>


    <div class="container">
      <div class="row">
        @yield('sub-nav')
        @yield('content')
      </div>
    </div>
  </main>

  <script src="{{ url('js/app.js') }}"></script>
  @yield('script')

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
</body>

</html>
