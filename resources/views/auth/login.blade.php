<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ url('img/core-img/fav2.ico') }}">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="icon" href="{{ url('img/school.ico') }}">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{url('css/LoginRegister.css')}}" />
    <title>ProjetApprentisRecrutor2000 Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
            @csrf
            <h2 class="title">Bienvenue</h2>
            <div class="input-field">
              <i class="fas fa-at"></i>
              <input type="email" placeholder="email" name="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" placeholder="Mot De Passe" name="password"/>
            </div>
            <input type="submit" value="Connexion" class="btn solid" />
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </form>
          <form action="{{route('register')}}" class="sign-up-form">
            @csrf
            <h2 class="title">Inscription</h2>
            <div class="input-field">
              <i class="fas fa-at"></i>
              <input type="email" placeholder="email" id="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Valider" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3 class="loginCorrection">Nouveau ?</h3>
            <p class="loginCorrection">
              Vous n'avez pas encore de compt sur <strong>ProjetApprentisRecrutor2000</strong> pas de soucis cliqué sur le button ci-dessous !
            </p>
            <button class="btn transparent" id="sign-up-btn">
            Inscription
            </button>
          </div>
          <img src="{{url('img/aventure.svg')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Vous Avez Déja Un Compte ?</h3>
            <p>

            </p>
            <button class="btn transparent" id="sign-in-btn">
              Connexion
            </button>
          </div>
          <img src="{{url('img/register.svg')}}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{url("js/Login.js")}}"></script>
  </body>
</html>