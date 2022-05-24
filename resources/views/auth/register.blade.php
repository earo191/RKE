@extends('layouts.app_login')

@section('content')
  <article class="login__container">
    <br>
    <header class="login__logo">
      <img src="{{ asset('img/play.png') }}" alt="Logo PLAYRKE" class="login__logo__image">
    </header>
    <article class="login__content">
      
      <section class="login__form">
        @foreach ($errors->all() as $message)
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <span class="text-center">{{ $message }}</span>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
            </div>
        @endforeach

  
<section class="login__form">
           @foreach ($errors->all() as $message)
                 <div class="alert alert-danger alert-dismissible fade show" role="alert">
                         <span class="text-center">{{ $message }}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                         </button>
                   </div>
            @endforeach

   <form action="{{ route('register') }}" method="post"  id="FormB8">
    @csrf
        <article class="login__form__item">
          <input type="email" class="login__form__item__input validar1" placeholder="Correo" name="email">
        </article>
        <article class="login__form__item">
          <input type="text" class="login__form__item__input validar1" placeholder="Nombre de Usuario" name="username">
        </article>
        <article class="login__form__item">
          
          <select name="pais" class="login__form__item__input" @error('country') is-invalid @enderror">
              <option value="">{{ __('Seleccione Pais') }}</option>
              @foreach ($paices as $pais)
                  <option value="{{ $pais->id }}">{{ $pais->name }}</option>
              @endforeach
          </select>
          <article class="login__form__item">
            <input type="password" class="login__form__item__input validar1" placeholder="Contraseña" name="password" id="password">

            </article>
            <article class="login__form__item">
            <input id="password-confirm" type="password" class="login__form__item__input validar1" name="password_confirmation" placeholder="Repetir Contraseña" required autocomplete="new-password">


        </form>
      </section>
    
      <section class="login__button">
        <button class="button--1" id="reg">Registrarse</button>
      </section>

    </article>
        <footer class="login__footer">
          <article class="login__footer__item">
            <a href="{{ route('login') }}" title="Iniciar Sesión" class="forget-password">¿Ya Posees una Cuenta?</a>
          </article>
        </footer>
  </article>
@endsection


@section('script')
<script type="text/javascript" src="{{asset('alertify/lib/alertify.min.js')}}"></script>
    <script type="text/javascript">
 

  $(document).on('click','#reg', function(e){

   if($(".validar1").val()==""){
        alertify.error("Todos los Campos  son Obligatorios"); 
     }else if($("#Password").val()==$("#Password1").val()){
          $('#FormB8').submit();
     }else{
         alertify.error("Los campos password no Coincideng"); 
     }
    
        
  });

</script>
@endsection