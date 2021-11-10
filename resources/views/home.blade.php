<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <link href="{{ url('css/app.css') }}" rel="stylesheet">

  <style>
    html,
    body {
      height: 100%;
    }

    body {
      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }

    .form-signin .checkbox {
      font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="ds_login"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="ds_senha"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>

  <script>var url = "{{ url('/') }}";</script>
</head>

<body class="text-center">
  <main class="form-signin">
    <form id="formSubmitLogin">
      <img class="mb-4" src="{{ url('images/icone.png') }}" alt="" width="72" height="57">
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
  </main>
  <script src="{{ url('js/app.js') }}"></script>
  <script>
    doLogout();
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
          setCookie('token', data.token);
          setCookie('usuario', data.usuario);
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
