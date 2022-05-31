@extends('layouts.app_login')


@section('content')
<article class="login__container">
    <header class="login__logo">
      <img src="{{asset('img/play.png')}}" alt="Logo PLAYRKE" class="login__logo__image">
    </header>
    <article class="login__content">
      <p class="login__content__text">
        
      </p>
    
      <section class="login__form">
        <form action="{{ route('login') }}" method="post" id="form1">
          <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
            <article class="login__form__item">
              <input id="login" type="text" class="login__form__item__input @if ($errors->has('username') || $errors->has('email')) is-invalid @endif"name="login" 
            value="{{ old('username') ?: old('email') }}" required autocomplete="login" placeholder="Usuario/Correo" utofocus>
                @if ($errors->has('username') || $errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                    </span>
                @endif
            </article>
            <article class="login__form__item">
              <input type="hidden"  id="bandera" value="0">
              <input type="password" class="login__form__item__input" id="pass" name="password" placeholder="Contraseña">
              <!-- Inicio SVG -->
              <svg id="view-eye" viewBox="0 0 24 25">
                <path d="M12 4.524c-5 0-9.27 3.11-11 7.5 1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zm0 12.5c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z">
                </path>
              </svg>
              <!-- Fin SVG -->
            </article>
        </form>
      </section>

      <section class="login__button">
        <button class="button--1" id="Ingresar">Ingresar</button>
      </section>
    </article>
    <footer class="login__footer">
      <article class="login__footer__item">
        <a href="{{ route('password.request') }}" class="forget-password">¿Olvidaste tu contraseña?</a>
      </article>
      <article class="login__footer__item">
        ¿Aún no tienes cuenta?
        <a href="{{ route('register') }}" title="Crear Cuenta" class="user-register">
          Crear cuenta
        </a>
      </article>
      <div class="" style="position: absolute; margin-top: 77px; color: #14c0e1; margin-left: 41px; ">
        <p>PlayRKE © 2022, todos los derechos reservados.</p>
      </div>
    </footer>
</article>

    @endsection

@section('script')

  <script type="text/javascript" src="{{asset('alertify/lib/alertify.min.js')}}"></script>
  <script type="text/javascript">
    $('.carousel').carousel()
    $(document).on('click','#Ingresar', function(e){
      
          if($(".validar").val()==""){
            alertify.error("Todos los Campos  son Obligatorios"); 
          }else{
              $('#form1').submit();
          }
      
          
        });
    $(document).on('click','#view-eye', function(e){
      if($("#bandera").val()==0){
          $("#pass").attr('type','text');
          $("#bandera").val('1');
      }else{
          $("#pass").attr('type','password');
          $("#bandera").val('0');
      }
      
    });

  </script>
@endsection