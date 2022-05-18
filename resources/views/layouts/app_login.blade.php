<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="PLAYRKE,PLAY-RKE,Natural Activa,Rifa,Rifas,apartado,sistema de apartado,tienda,wy,WY corporation,printfconnection,sorteo,sorteos,ticket,loterias,loterias"/>
    <title>Login (PLAYRKE)</title>
    <!-- Bootstrap 4.6 -->
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="static/css/styles.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    <link  rel="stylesheet" href="{{asset('alertify/themes/alertify.core.css')}}">
    <link rel="stylesheet"  href="{{asset('alertify/themes/alertify.default.css')}}">
    <link rel="shortcat icon" href="{{ asset('img/favi.png') }}"> 
  </head>
  <body>


  <main class="login l-container">

  @yield('content')




  <section class="login__carousel">
                    <!-- Inicio Carousel (Bootstrap) -->

                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">

                    <!-- Inicio indicadores del banner -->
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <!-- Fin indicadores del banner -->

                    <!-- Inicio slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="static/images/slider/1.png" alt="Slide #1" class="login__carousel__image">
                        <div class="login__carousel__copy">
                        <!--  <h1 class="login__carousel__copy__title">Pos</h1>-->
                        <!-- <p class="login__carousel__copy__description">
                            Crea facturas fácil y rápido desde tus puntos de venta.
                            </p>-->
                            {{-- <a href="#" class="login__carousel__copy__button">
                            Ver más
                            </a> --}}
                        </div>
                        </div>
                        {{-- <div class="carousel-item">
                        <img src="static/images/slider/2.png" alt="Slide #1" class="login__carousel__image">
                        </div>
                        <div class="carousel-item">
                        <img src="static/images/slider/3.png" alt="Slide #1" class="login__carousel__image">
                        </div> --}}
                    </div>
                    <!-- Fin slides -->

                    <!-- Inicio contenido fijo -->
                    {{-- <article class="login__carousel__content">
                        <section class="login__carousel__content__top">
                        <p class="login__carousel__text">
                            Para ayudarte escríbenos en
                            <a href="#" class="login__carousel__button">printfconnection@gmail.com</a>
                        </p>
                        </section>
                        <section class="login__carousel__content__bottom">
                        <p class="login__carousel__text">
                            Síguenos en Facabook
                        </p>
                        <a href="https://www.facebook.com/playrke" target="_blank">
                        
                        <article class="login__carousel__social">
                            
                            <section class="login__carousel__social__item">
                            <!-- Inicio SVG -->
                            
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24Z" fill="#3B5998"/>
                                <path d="M26.5015 38.1115V25.0542H30.1059L30.5836 20.5546H26.5015L26.5077 18.3025C26.5077 17.1289 26.6192 16.5001 28.3048 16.5001H30.5581V12H26.9532C22.6231 12 21.0991 14.1828 21.0991 17.8536V20.5551H18.4V25.0547H21.0991V38.1115H26.5015Z" fill="white"/>
                                </svg>

                            
                            <!-- Fin SVG -->
                            </section>  
                        <!--   <section class="login__carousel__social__item">
                    
                            <svg id="social-twitter" viewBox="0 0 24 25">
                                <path d="M20 6.562a6.569 6.569 0 0 1-1.885.517 3.29 3.29 0 0 0 1.443-1.816 6.542 6.542 0 0 1-2.084.798 3.283 3.283 0 0 0-5.596 2.993 9.317 9.317 0 0 1-6.765-3.43 3.272 3.272 0 0 0-.444 1.651c0 1.138.58 2.144 1.46 2.732a3.266 3.266 0 0 1-1.487-.41v.041a3.285 3.285 0 0 0 2.633 3.22 3.29 3.29 0 0 1-1.482.056 3.286 3.286 0 0 0 3.066 2.28A6.585 6.585 0 0 1 4 16.554a9.3 9.3 0 0 0 5.033 1.474c6.037 0 9.339-5.002 9.339-9.34 0-.142-.003-.283-.01-.425A6.726 6.726 0 0 0 20 6.563z"></path>
                            </svg>
                    
                            </section>-->
                        <!--   <section class="login__carousel__social__item">
                        
                            <svg id="social-twitter" viewBox="0 0 24 25">
                                <path d="M20 6.562a6.569 6.569 0 0 1-1.885.517 3.29 3.29 0 0 0 1.443-1.816 6.542 6.542 0 0 1-2.084.798 3.283 3.283 0 0 0-5.596 2.993 9.317 9.317 0 0 1-6.765-3.43 3.272 3.272 0 0 0-.444 1.651c0 1.138.58 2.144 1.46 2.732a3.266 3.266 0 0 1-1.487-.41v.041a3.285 3.285 0 0 0 2.633 3.22 3.29 3.29 0 0 1-1.482.056 3.286 3.286 0 0 0 3.066 2.28A6.585 6.585 0 0 1 4 16.554a9.3 9.3 0 0 0 5.033 1.474c6.037 0 9.339-5.002 9.339-9.34 0-.142-.003-.283-.01-.425A6.726 6.726 0 0 0 20 6.563z"></path>
                            </svg>
                        
                            </section>-->
                        </article>
                        </a>
                        </section>
                    </article> --}}
                    <!-- Fin contenido fijo -->

                    </div>
                    <!-- Fin Carousel (Bootstrap) -->
                </section>
                </main>

  <script src="static/js/jquery-3.5.1.slim.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script>
      $('.carousel').carousel()
    </script>
@yield ('script')
  </body>
</html>