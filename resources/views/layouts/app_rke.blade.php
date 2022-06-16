<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="x-ua-compatible" content="ie=edge">



    <!-- Font Awesome Icons -->



    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">



    <!-- overlayScrollbars -->

    <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <!-- Theme style -->

    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">

    <!-- Google Font: Source Sans Pro -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    

    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <!--Table-->

    <link rel="stylesheet" href="{{ asset('template/plugins/jsgrid/jsgrid.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template/plugins/jsgrid/jsgrid-theme.min.css') }}">



    <link rel="stylesheet" href="{{ asset('template/plugins/datatables-responsive/css/responsive.bootstrap4.css') }}">

    <link rel="stylesheet" href="{{ asset('template/plugins/jsgrid/jsgrid.min.css') }}">

    <link rel="stylesheet" href="{{ asset('alertify/themes/alertify.core.css') }}">

    <link rel="stylesheet" href="{{ asset('alertify/themes/alertify.default.css') }}">

    <link rel="stylesheet" href="{{ asset('alertify/themes/alertify.default.css') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">



    <link rel="shortcat icon" href="{{ asset('img/favi.png') }}"> 



</head>



<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">





        @yield('header')



        <!-- nav Container -->

        <div class="wrapper">

            <nav class="main-header navbar navbar-expand navbar-white navbar-light">

                <ul class="navbar-nav">

                    <li class="nav-item">

                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>

                    </li>

                    <li class="nav-item d-none d-sm-inline-block">

                        <a href="{{ route('home') }}" title="Play-RKE" class="nav-link">Home</a>

                    </li>

                    <li class="nav-item d-none d-sm-inline-block">

                        <a href="#" class="nav-link">Contactar</a>

                    </li>

                </ul>

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();

                                                     document.getElementById('logout-form').submit();">

                            <i class="nav-icon fas fa-door-open"></i>

                            {{ __('Salir') }}

                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                            @csrf

                        </form>

                    </li>

                </ul>

            </nav>



            <!-- navbar Container -->



            <!-- SIDEBAR -->



            <aside class="main-sidebar sidebar-dark-primary elevation-4">

                <!-- Brand Logo -->

                <a href="{{ url('/home') }}" class="brand-link">

                    <img src="{{ asset('img/play.png') }}" alt="Logo Play RKE" class="brand-image  elevation-0"

                        style="opacity: .8">

                    <!-- <span class="brand-text font-weight-light">Dashboard</span>-->

                </a>



                <div class="sidebar">



                    <!-- Sidebar user panel (optional) -->

                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                        <div class="image">

                            <img src="{{ asset('template/dist/img/images.png') }}" class="img-circle elevation-2"

                                alt="User Image">

                        </div>

                        <div class="info">

                            <a href="{{ route('usuario.index') }}"

                                class="d-block">{{ Auth::user()->username }}</a>

                        </div>

                    </div>

                    <!-- Sidebar user panel (optional) -->



                    <!-- Sidebar Menu -->

                    <nav class="mt-2">

                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"

                            data-accordion="false">



                            <!-- MENU ADMIN-->



                            @if(Auth::user()->t_user == 2)

                            <li class="nav-item has-treeview ">

                                <a href="{{ route('home') }}" class="nav-link  {{! Route::is('home') ?: 'active'}}">

                                    <i class="nav-icon fas fa-tachometer-alt"></i>

                                    <p>

                                        Dashboard

                                        <i class=""></i>

                                    </p>

                                </a>



                            </li>



                            <li class="nav-item has-treeview">

                                <a href="#" class="nav-link">

                                    <i class="nav-icon fas fas fa-university"></i>

                                    <p>

                                        Datos Bancarios

                                        <i class="right fas fa-angle-left"></i>

                                    </p>

                                </a>

                                <ul class="nav nav-treeview">

                                    <li class="nav-item">

                                        <a href="{{ route('banco.index') }}" title="Información Bancaria"

                                            class="nav-link {{! Route::is('banco.index') ?: 'active'}}">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Transferencias</p>

                                        </a>

                                    </li>

                                    

                                    <li class="nav-item">

                                        <a href="{{ Route('pagomovil.index') }}" title="Pago Móvil"

                                            class="nav-link">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Pago Móvil</p>

                                        </a>

                                    </li>

                                </ul>

                                

                            </li>



                            <li class="nav-item has-treeview">

                                <a href="#" class="nav-link">

                                    <i class="nav-icon fas fa-money-bill-alt"></i>

                                    <p>

                                        Procesar Pagos

                                        <i class="fas fa-angle-left right"></i>

                                    </p>

                                </a>

                                <ul class="nav nav-treeview">



                                    <li class="nav-item">

                                        <a title="Procesar Pagos"

                                            href="{{ url('modulos/admin/procesarpagos/pago_trivia') }}"

                                            class="nav-link">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Pago Trivias</p>

                                        </a>

                                    </li>



                                </ul>

                                <hr />

                            </li>



                                          {{-- <li class="nav-item has-treeview">

                              <a href="#" title="Rifas" class="nav-link">

                                <i class="nav-icon fas fa-table"></i>

                                <p>

                                  Rifas

                                  <i class="fas fa-angle-left right"></i>

                                </p>

                              </a>

                              <ul class="nav nav-treeview">

                                <li class="nav-item">

                                  <a href="{{url('rifas/crear')}}" class="nav-link" title="Rifas">

                                    <i class="far fa-circle nav-icon"></i>

                                    <p>Crear Rifa</p>

                                  </a>

                                </li>

                              </ul>



                              



                              <hr>

                            </li> --}}



                            {{-- li trivias --}}

                            <li class="nav-item has-treeview ">

                                <a class="nav-link {{! Route::is('trivia.index') ?: 'active'}}">

                                    <i class="nav-icon fas fas fa-university"></i>

                                    <p>

                                        Trivias

                                        <i class="right fas fa-angle-left"></i>

                                    </p>

                                </a>

                                <ul class="nav nav-treeview">

                                    <li class="nav-item ">

                                        <a href="{{ route('trivia.index') }}" title="Trivias" class="nav-link {{! Route::is('trivia.index') ?: 'active'}}">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Crear sala</p>

                                        </a>

                                    </li>

                                    <li class="nav-item ">

                                        <a href="{{ route('trivia.list') }}" title="Trivias" class="nav-link {{! Route::is('trivia.list') ?: 'active'}}">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Ver/Editar</p>

                                        </a>

                                    </li>

                                    

                                </ul>

                            </li>



                            {{-- li trivias --}}

                            <li class="nav-item has-treeview ">

                                <a class="nav-link {{! Route::is('recarga.index') ?: 'active'}}">

                                    <i class="nav-icon fas fas fa-university"></i>

                                    <p>

                                        Recargas

                                        <i class="right fas fa-angle-left"></i>

                                    </p>

                                </a>

                                <ul class="nav nav-treeview">

                                    <li class="nav-item ">

                                        <a href="{{ route('recarga.index') }}" title="Trivias" class="nav-link {{! Route::is('recarga.index') ?: 'active'}}">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>En espera</p>

                                        </a>

                                    </li>



                                    <li class="nav-item ">

                                        <a href="{{ route('recarga.aceptadas') }}" title="Trivias" class="nav-link {{! Route::is('recarga.aceptadas') ?: 'active'}}">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Aprobadas</p>

                                        </a>

                                    </li>



                                    <li class="nav-item ">

                                        <a href="{{ route('recarga.rechazadas') }}" title="Trivias" class="nav-link {{! Route::is('recarga.rechazadas') ?: 'active'}}">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Rechazadas</p>

                                        </a>

                                    </li>

                                    

                                </ul>

                                <hr />

                            </li>

                            {{-- li trivias --}}





                            <li class="nav-item">

                                <a href="{{ route('tasa.index') }}" class="nav-link {{ !Route::is('tasa.index') ?: 'active'}}">

                                    <i class="nav-icon fas fa-calendar-alt"></i>

                                    <p>

                                        Tasa de cambio

                                        <!-- <span class="badge badge-info right">2</span>-->

                                    </p>

                                </a>

                            </li>



                             <!--FINAK MENU ADMIN-->



                            @else



                             <!-- MENU user-->



                             <li class="nav-item has-treeview ">

                                <a href="{{ route('home') }}" class="nav-link  {{! Route::is('home') ?: 'active'}}">

                                    <i class="nav-icon fas fa-tachometer-alt"></i>

                                    <p>

                                        Dashboard

                                        <i class=""></i>

                                    </p>

                                </a>



                            </li>



                            <li class="nav-item has-treeview ">

                                <a href="{{ route('refe.index',['referralCode' => auth()->user()->referral_code]) }}" class="nav-link  {{! Route::is('refe.index') ?: 'active'}}">

                                    <i class="nav-icon fas fa-users"></i>

                                    <p>

                                        Mis Referidos

                                        <i class=""></i>

                                    </p>

                                </a>



                            </li>







                             <li class="nav-item has-treeview">

                                <a href="#" class="nav-link">

                                    <i class="nav-icon fas fas fa-university"></i>

                                    <p>

                                        Datos Bancarios

                                        <i class="right fas fa-angle-left"></i>

                                    </p>

                                </a>

                                <ul class="nav nav-treeview">

                                    <li class="nav-item">

                                        <a href="{{ route('banco.index') }}" title="Transferencias"

                                            class="nav-link {{! Route::is('banco.index') ?: 'active'}}">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Transferencias</p>

                                        </a>

                                    </li>

                                    

                                    <li class="nav-item">

                                        <a href="{{ Route('pagomovil.index') }}" title="Pago Móvil"

                                            class="nav-link">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Pago Móvil</p>

                                        </a>

                                    </li>

                                </ul>

                                

                            </li>

                            

                            <li class="nav-item">

                                <a href="{{ route('monedero.index') }}" class="nav-link">

                                    <i class="nav-icon fas fa-wallet"></i>

                                    <p>

                                        Monedero

                                        <!-- <span class="badge badge-info right">2</span>-->

                                    </p>

                                </a>

                            </li>



                            <li class="nav-item">

                                <a href="{{ route('trivia.index') }}" class="nav-link">

                                    <i class="nav-icon fas fa-gamepad"></i>

                                    <p>

                                        Juegos

                                        <!-- <span class="badge badge-info right">2</span>-->

                                    </p>

                                </a>

                            </li>

                            

                            <li class="nav-item has-treeview">

                                <a href="#" class="nav-link">

                                    <i class="nav-icon fas fa-star"></i>

                                    <p>

                                        Premios

                                        <i class="right fas fa-angle-left"></i>

                                    </p>

                                </a>

                                <ul class="nav nav-treeview">

                                    <li class="nav-item">

                                        <a href="#" title="Tarjetas PlayRKE"

                                            class="nav-link {{! Route::is('banco.index') ?: 'active'}}">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Tarjetas PlayRKE</p>

                                        </a>

                                    </li>

                                    

                                    <li class="nav-item">

                                        <a href="#" title="Historial de Premios"

                                            class="nav-link">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Historial</p>

                                        </a>

                                    </li>

                                </ul>

                                

                            </li>

                

                            @endif

                            <!-- final MENU user-->





                            <!-- /.salir -->

                            

                            <li class="nav-item">

                                <hr/>

                                <li class="nav-item">

                                <a href="#" class="nav-link">

                                    <i class="nav-icon fas fa-exclamation-circle"></i>

                                    <p>

                                        Soporte Técnico

                                        <!-- <span class="badge badge-info right">2</span>-->

                                    </p>

                                </a>

                            </li>

                                <li class="nav-item has-treeview">

                                <a href="" class="nav-link">

                                    <i class="nav-icon fas fa-book"></i>

                                    <p>

                                        Información

                                        <i class="right fas fa-angle-left"></i>

                                    </p>

                                </a>

                                <ul class="nav nav-treeview">

                                    <li class="nav-item">

                                        <a href="{{ route('info.terminos') }}" title="Términos y Condiciones"

                                            class="nav-link {{! Route::is('info.terminos') ?: 'active'}}">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Términos y Condiciones</p>

                                        </a>

                                    </li>

                                    

                                    <li class="nav-item">

                                        <a href="{{ Route('info.acerca') }}" title="Acerca de PlayRKE"

                                            class="nav-link">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Acerca de PlayRKE</p>

                                        </a>

                                    </li>

                                    <li class="nav-item">

                                        <a href="{{ Route('info.privacidad') }}" title="Política de Privacidad"

                                            class="nav-link">

                                            <i class="far fa-circle nav-icon"></i>

                                            <p>Política de Privacidad</p>

                                        </a>

                                    </li>

                                </ul>

                                

                            </li>    

                                <li class="nav-item has-treeview">

                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                    <i class="nav-icon fas fa-door-open"></i>

                                    <p> Salir</p>

                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"

                                    class="d-none">

                                    @csrf

                                </form>

                            <li class="nav-item">

                                <hr/>

                                

                            </li>

                            

                            <!-- /.salir -->



                        </ul>

                    </nav>

                    <!-- /.sidebar-menu -->

                </div>

            </aside>



            <!-- /.navbar -->





            <div class="content-wrapper">

                <!-- Content Header (Page header) TITTLE -->

                <div class="content-header">

                    <div class="container-fluid">



                        <div class="row mb-2">

                            <div class="col-sm-6">



                            </div><!-- /.col -->

                            {{-- <div class="col-sm-6">

                                <ol class="breadcrumb float-sm-right">

                                    <li class="breadcrumb-item"><a href="#">Home</a></li>

                                    <li class="breadcrumb-item active">Dashboard v2rtytryrty</li>

                                </ol>

                            </div><!-- /.col --> --}}



                        </div><!-- /.row -->

                        @yield('content')

                    </div><!-- /.container-fluid -->

                </div>













                <!-- FOOTER -->

                <footer class="main-footer">

                    <strong> PlayRKE © 2022, todos los derechos reservados.</strong>

                    

                    <div class="float-right d-none d-sm-inline-block">

                        <b>Version 1.1</b> 

                    </div>

                </footer>

                 <!-- FOOTER -->

            </div>

            @yield('scripts')

            @yield('modals')



            <!-- jQuery -->

            <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>

            <!-- Bootstrap -->

            <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

            <!-- overlayScrollbars -->

            <script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

            <!-- AdminLTE App -->

            <script src="{{ asset('template/dist/js/adminlte.js') }}"></script>



            <!-- OPTIONAL SCRIPTS -->

            <script src="{{ asset('template/dist/js/demo.js') }}"></script>

            {{-- <script src="{{asset('js/jquery-3.5.1.slim.min.js')}}"></script> --}}

            <script src="{{asset('js/bootstrap.min.js')}}"></script>

            <!-- PAGE PLUGINS -->

            <!-- jQuery Mapael -->

            <script src="{{ asset('template/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>

            <script src="{{ asset('template/plugins/raphael/raphael.min.js') }}"></script>

            <script src="{{ asset('template/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>

            <script src="{{ asset('template/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>

            <!-- ChartJS -->

            <script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>



            <!-- PAGE SCRIPTS -->

            <script src="{{ asset('template/dist/js/pages/dashboard2.js') }}"></script>







            <!-- PAGE SCRIPTS -->

            <script src="{{ asset('template/dist/js/pages/dashboard2.js') }}"></script>



            <script src="{{ asset('template/plugins/jsgrid/demos/db.js') }}"></script>

            <script src="{{ asset('template/plugins/jsgrid/jsgrid.min.js') }}"></script>

            <!-- DataTables -->

            <script src="{{ asset('template/plugins/datatables/jquery.dataTables.js') }}"></script>

            <script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

            <script src="{{ asset('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

            <script src="{{ asset('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>



            <script type="text/javascript" src="{{ asset('alertify/lib/alertify.min.js') }}"></script>

            <!-- page script -->

            <script>

                $(function() {

                    $('#example1').DataTable({

                        "ordering": true,

                        "language": {

                            "sProcessing": "Procesando...",

                            "sLengthMenu": "Mostrar _MENU_ registros",

                            "sZeroRecords": "No se encontraron resultados",

                            "sEmptyTable": "Ningún dato disponible en esta tabla",

                            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",

                            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",

                            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",

                            "sInfoPostFix": "",

                            "sSearch": "Buscar:",

                            "sUrl": "",

                            "sInfoThousands": ",",

                            "sLoadingRecords": "Cargando...",

                            "oPaginate": {

                                "sFirst": "Primero",

                                "sLast": "Último",

                                "sNext": "Siguiente",

                                "sPrevious": "Anterior"

                            },

                            "oAria": {

                                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",

                                "sSortDescending": ": Activar para ordenar la columna de manera descendente"

                            }

                        }

                    });





                    $('#example2').DataTable({

                        "paging": true,

                        "lengthChange": false,

                        "searching": false,

                        "ordering": true,

                        "info": true,

                        "autoWidth": false,

                    });

                });



                $("#saldos").hover(

                    function() {

                        $("#saldo-dolar").css("display", "block");

                        $("#saldo-bs").css("display", "none");

                    },

                    function() {

                        $("#saldo-dolar").css("display", "none");

                        $("#saldo-bs").css("display", "block");

                    }

                );



                $(document).on('click', '#procesar', function(e) {

                    e.stopImmediatePropagation();

                    $('#guardar').attr("disabled", false);

                    $('.desbloquear').attr("disabled", false);



                });

                $(document).on('click', '#apartar', function(e) {

                    e.stopImmediatePropagation();

                    e.preventDefault();

                    var mensaje = "<div class='text-center'>¿Desea Adquirir el Ticket Seleccionado?</div>";

                    $("#idrifa").val($(this).data('idrifa'));

                    $("#numero").val($(this).data('numero'));

                    $("#id_r").val($(this).data('idr'));



                    /* alert( $("#idrifa").val());

                     alert( $("#numero").val());

                     alert( $("#id_r").val());*/

                    alertify.confirm(mensaje, function(e) {

                        if (e) {

                            // a_element is the <a> tag that was clicked



                            $('#form').submit();

                            // action(a_element);



                        }

                    });



                });

                $(document).on('click', '#imgg', function(e) {



                    $("#imach").attr('src', $(this).data('img'));





                });

            </script>
            <script>
                 $( "#saldosCongelado" ).hover(
                    function() {
                    $("#saldo-dolarC").css("display", "block");
                    $("#saldo-bsC").css("display", "none");
                    },
                    function() {
                    $("#saldo-dolarC").css("display", "none");
                    $("#saldo-bsC").css("display", "block");
                    }
                );
            </script>

            @yield('scripts')

            {{-- API DOLARTODAY --}}

            <script type="text/javascript">

                //https://s3.amazonaws.com/dolartoday/data.json

                $.getJSON("https://s3.amazonaws.com/dolartoday/data.json", function(data) {

                    $('#texto').html(data.USD.transferencia);

                    $('#texto2').html(data.USD.sicad2);

                    $('#al').html( data._timestamp.fecha);

                    $('#dolar_api').val( data.USD.transferencia);

                });

            </script>

            {{-- API DOLARTODAY --}}

            <script>

                $(document).ready(function(){

                    // Listen for the input event.

                    $("#porcentaje_dolar").on('input', function (evt) {

                    // Allow only numbers.

                        $(this).val($(this).val().replace(/[^0-9]/g, ''));

                    });

                    $("#nro_cuenta").on('input', function (evt) {

                    // Allow only numbers.

                        $(this).val($(this).val().replace(/[^0-9]/g, ''));

                    });

                    $("#telefono_pago").on('input', function (evt) {

                    // Allow only numbers.

                        $(this).val($(this).val().replace(/[^0-9]/g, ''));

                    });

                    $("#cedula").on('input', function (evt) {

                    // Allow only numbers.

                        $(this).val($(this).val().replace(/[^0-9]/g, ''));

                    });

                    $("#monto").on('input', function (evt) {

                    // Allow only numbers.

                        $(this).val($(this).val().replace(/[^0-9.]/g, ''));

                    });

                });

            </script>

        </div>

</body>



</html>

