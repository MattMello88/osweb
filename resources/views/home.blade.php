<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>OS Web - Sistema de Chamado da Painel Fiscal</title>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="{{url('/assets/img/favicons/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{url('/assets/img/favicons/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('/assets/img/favicons/favicon-16x16.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{url('/assets/img/favicons/favicon.ico')}}">
  <link rel="manifest" href="{{url('/assets/img/favicons/manifest.json')}}">
  <meta name="msapplication-TileImage" content="{{url('/assets/img/favicons/mstile-150x150.png')}}">
  <meta name="theme-color" content="#ffffff">

  <script src="{{ url('/assets/js/config.js') }}"></script>
  <script src="{{ url('/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link href="{{ url('css/app.css') }}" rel="stylesheet">

  <link href="{{ url('/vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link href="{{ url('/vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
  <link href="{{ url('/assets/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
  <link href="{{ url('/assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
  <link href="{{ url('/assets/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
  <link href="{{ url('/assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">

  <script>
    var isRTL = JSON.parse(localStorage.getItem('isRTL'));
    if (isRTL) {
      var linkDefault = document.getElementById('style-default');
      var userLinkDefault = document.getElementById('user-style-default');
      linkDefault.setAttribute('disabled', true);
      userLinkDefault.setAttribute('disabled', true);
      document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
      var linkRTL = document.getElementById('style-rtl');
      var userLinkRTL = document.getElementById('user-style-rtl');
      linkRTL.setAttribute('disabled', true);
      userLinkRTL.setAttribute('disabled', true);
    }
  </script>

  <script>var url = "{{ url('/') }}";</script>
  <script src="{{ url('js/auth.js') }}"></script>

  
</head>

<body class="text-center">
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <div class="container-fluid">
      <div class="row min-vh-100 flex-center g-0">
        <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape" src="../../../assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250"><img class="bg-auth-circle-shape-2" src="../../../assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
          <div class="card overflow-hidden z-index-1">
            <div class="card-body p-0">
              <div class="row g-0 h-100">
                <div class="col-md-5 text-center bg-card-gradient">
                  <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                    <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);">
                    </div>
                    <!--/.bg-holder-->

                    <div class="z-index-1 position-relative"><a class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder" href="../../../index.html">falcon</a>
                      <p class="opacity-75 text-white">With the power of Falcon, you can now focus only on functionaries for your digital products, while leaving the UI design on us!</p>
                    </div>
                  </div>
                  <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                    <p class="text-white">Don't have an account?<br><a class="text-decoration-underline link-light" href="../../../pages/authentication/card/register.html">Get started!</a></p>
                    <p class="mb-0 mt-4 mt-md-5 fs--1 fw-semi-bold text-white opacity-75">Read our <a class="text-decoration-underline text-white" href="#!">terms</a> and <a class="text-decoration-underline text-white" href="#!">conditions </a></p>
                  </div>
                </div>
                <div class="col-md-7 d-flex flex-center">
                  <div class="p-4 p-md-5 flex-grow-1">
                    <div class="row flex-between-center">
                      <div class="col-auto">
                        <h3>Account Login</h3>
                      </div>
                      <div class="col-12">
                        <div class="toast align-items-center text-white bg-primary border-0 mb-4 show" id="toast-login" role="alert" aria-live="assertive" aria-atomic="true">
                          <div class="d-flex">
                            <div class="toast-body" id="toast-login-body">
                              Deu erro
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <form id="formSubmitLogin">
                      <div class="mb-3">
                        <div class="d-flex justify-content-between">
                          <label class="form-label" for="floatingInput">Email address</label>
                        </div>
                        <input type="text" class="form-control" id="floatingInput" placeholder="first.lastname" name="ds_login" value="matheus.mello">
                      </div>
                      <div class="mb-3">
                        <div class="d-flex justify-content-between">
                          <label class="form-label" for="floatingds_senha">Password</label>
                        </div>
                        <input type="password" class="form-control" id="floatingds_senha" placeholder="Senha" name="ds_senha" value="mmello">
                      </div>
                      <div class="row flex-between-center">
                        <div class="col-auto">
                          <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" id="card-checkbox" checked="checked" />
                            <label class="form-check-label mb-0" for="card-checkbox">Remember me</label>
                          </div>
                        </div>
                        <div class="col-auto"><a class="fs--1" href="../../../pages/authentication/card/forgot-password.html">Forgot Password?</a></div>
                      </div>
                      <div class="mb-3">
                        <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log in</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
 <!-- <main class="form-signin">
    <form id="formSubmitLogin">
      <img class="mb-4" src="{{ url('img/icone.png') }}" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Login
        @if(Session::has('token'))
          {{ Session::get('token')}}
        @endif</h1>

      <div class="toast align-items-center text-white bg-primary border-0 mb-4" id="toast-login" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body" id="toast-login-body">
            Hello, world! This is a toast message.
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="first.lastname" name="ds_login" value="matheus.mello">
        <label for="floatingInput">Login</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingds_senha" placeholder="Senha" name="ds_senha" value="mmello">
        <label for="floatingds_senha">Senha</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Logar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
  </main>-->

  

  <script src="{{ url('/vendors/popper/popper.min.js') }}"></script>
  <script src="{{ url('/vendors/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ url('/vendors/anchorjs/anchor.min.js') }}"></script>
  <script src="{{ url('/vendors/is/is.min.js') }}"></script>
  <script src="{{ url('/vendors/fontawesome/all.min.js') }}"></script>
  <script src="{{ url('/vendors/lodash/lodash.min.js') }}"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="{{ url('/vendors/list.js/list.min.js') }}"></script>
  <script src="{{ url('/assets/js/theme.js') }}"></script>

  <script src="{{ url('js/app.js') }}"></script>
  <script>
    auth.doLogout();
    var formSubmitLogin = function(event){
      event.preventDefault();
      var form = document.getElementById('formSubmitLogin');
      var formData = new FormData();
      for (var i = 0; i < form.length; ++i) {
        formData.append(form[i].name, form[i].value);
      }

      fetch(url+'/api/usuario/login', {
        method: "POST",
        headers: [
          ["Accept", "application/json"],
        ],
        body: formData
      })
      .then(function(res){
        return res.json();
      })
      .then(function(data) {
        console.log(data);
        if (data.usuario == undefined){
          var myToastEl = document.getElementById('toast-login')
          var textoBody = document.getElementById('toast-login-body')
          if (data.errors.ds_login !== undefined){
            textoBody.innerHTML = data.errors.ds_login;
          } else if (data.errors.ds_senha !== undefined){
            textoBody.innerHTML = data.errors.ds_senha[0];
          } else if (data.errors.message !== undefined){
            textoBody.innerHTML = data.errors.message;
          }
          var myToast = new Bootstrap.Toast(myToastEl)
          myToast.show();
        } else {
          auth.setCookie('token', data.token);
          auth.setCookie('usuario', data.usuario);
          window.location = url + '/dashboard';
        }


      })
      .catch(function(err){
        console.log(err);
      });

    };

    document.getElementById('formSubmitLogin').addEventListener('submit', formSubmitLogin);
  </script>
</body>

</html>
