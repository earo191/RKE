@extends('layouts.app_rke')
<title>Monedero - PlayRKE</title>
@section('content')
<!--Contenedor Monedero-->
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <!--Saldo Disponible-->
            <div class="col-md-3">
                <div class="info-box" title="Saldo Disponible">
                    <span class="info-box-icon bg-info elevation-1"><i class=" fas fa-wallet"></i></span>
                        <div class="info-box-content"  >
                            <span style="font-size: 17px;">Saldo Disponible</span>
                            <div id="saldos" class="saldos">
                                <span id="saldo-bs" class="info-box-number">Bs. {{$monedero->saldo}}</span>
                                <span id="saldo-dolar" style="display: none;" class="info-box-number">
                                    @if ( count($tasa) > 0 )
                                        $ {{number_format($monedero->saldo / $tasa[0]->tasa_RKE,2)}}
                                    @else
                                        {{number_format($monedero->saldo)}}  $
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Deposito-Recargar-->
                <div class="col-md-2">
                        <div class="info-box" title="Recargar Saldo"data-target="#exampleModalLong" data-toggle="modal">
                             <a class="info-box-icon bg-info elevation-1" href="" data-target="#exampleModalLong" data-toggle="modal">
                                <i class="fas fa-donate"></i>
                            </a>  
                            <div class="info-box-content">
                                 <a href="" data-target="#exampleModalLong" data-toggle="modal">
                                <span class="" style="font-size: 18px;" align="center">Depósito</span></a>
                            </div>
                            
                        </div>
                    
                </div>
                <!--Retirar-->
                <div class="col-md-2">
                        <div class="info-box" title="Retirar Saldo"data-target="#exampleModal" data-toggle="modal" >
                             <a class="info-box-icon bg-danger elevation-1" href="" data-target="#exampleModal" data-toggle="modal">
                                <i class="fas fa-hand-holding-usd"></i>
                            </a>  
                            <div class="info-box-content">
                                 <a href="" data-target="#exampleModal" data-toggle="modal">
                                <span class="" style="font-size: 18px;">Retirar</span></a>
                            </div>
                            
                        </div>
                    
                </div>
                <!--Saldo Congelado-->
                <div class="col-md-3">
                    <div class="info-box" title="Saldo Congelado">
                        <span class="info-box-icon bg-info elevation-1"><i class=" fas fa-lock"></i></span>
                        <div class="info-box-content"  >
                            <span style="font-size: 15px;">Saldo Congelado</span>
                            <div id="saldosCongelado" class="saldos">
                                <span id="saldo-bsC" class="info-box-number">Bs. {{$saldoCongelado}}</span>
                                <span id="saldo-dolarC" style="display: none;" class="info-box-number">
                                    @if ( count($tasa) > 0 )
                                        $ {{number_format($saldoCongelado / $tasa[0]->tasa_RKE,2)}}
                                    @else
                                        {{number_format($saldoCongelado)}}  $
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--TasaCambio-->
                <div class="col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dollar-sign"></i></span>
                        <div class="info-box-content" title="Tasa de Cambio">
                            <span class="info-box-text" "font-size: 16px;">Dólar USD</span>
                            
                            <span class="info-box-number">
                                @if ( count($tasa) > 0 )
                                 Bs. {{$tasa[0]->tasa_RKE}}
                                @else
                                <span id="dolar_api" type="text" name="dolar_api" ></span>
                                @endif
                            </span>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--Tabla depositos-->
            <div class="card">
                <div class="card-body">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" align="center">
                        <h5>D E P O S I T O S</h5>
                        <div class="table-responsive">
                            <table id="" class="table table-bordered table-striped dt-responsive" style="width:100%">
                                <thead align="center">
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Referencia</th>
                                        <th>Monto</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    @foreach($recargas  as $recarga)
                                    <tr>
                                        <th>{{$recarga->fecha_recarga}}</th>
                                        <td>{{$recarga->referencia}}</td>
                                        <th>{{$recarga->monto}}</th>
                                        <!--<td>{{$recarga->descripcion}}</td>-->
                                        @if ($recarga->estatus == 0)
                                            <td>
                                                <a class="a-edit btn  btn-danger">En espera</a>
                                            </td>
                                            
                                        @endif    
                                        @if ($recarga->estatus == 1)
                                            <td>
                                                <a class="a-edit btn  btn-success">Aprobado</a>
                                            </td>
                                        @endif
                                        @if ($recarga->estatus == 2)
                                            <td>
                                                <a class="a-edit btn  btn-secondary">Congelado</a>
                                            </td>
                                        @endif
            
                                    </tr>
                                    @endforeach          
                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><br>
            <!--Tabla retiros-->
            <div class="card">
                <div class="card-body">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" align="center">
                        <h5>R E T I R O S</h5>
                        <div class="table-responsive">
                            <table id="" class="table table-bordered table-striped dt-responsive" style="width:100%">
                                <thead align="center">
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Referencia</th>
                                        <th>Monto</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    {{-- @foreach($recargas  as $recarga)
                                    <tr>
                                        <th>{{$recarga->fecha_recarga}}</th>
                                        <td>{{$recarga->referencia}}</td>
                                        <th>{{$recarga->monto}}</th>
                                        <!--<td>{{$recarga->descripcion}}</td>-->
                                        @if ($recarga->estatus == 0)
                                            <td>
                                                <a class="a-edit btn  btn-danger">En espera</a>
                                            </td>
                                        @else
                                            <td>
                                                <a class="a-edit btn  btn-success">Aprobado</a>
                                            </td>
                                        @endif
            
                                    </tr>
                                    @endforeach          
                     --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals')
    <div id="exampleModalLong" class="modal fade"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Seleccione el método de depósito/recarga</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body grid-dashboard">
                        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" href="{{ route('monedero.create') }}" id="">
                            <span class="link-item">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                {{ __('Pago Movil') }}
                            </span>
                        </a>
                        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" href="{{route('monedero.createTransfer')}}" id="devices-link">
                            <span class="link-item" >
                                <i class="fa fa-university" aria-hidden="true"></i>
                                {{ __('Transferencia Bancaria') }}
                            </span>
                        </a>
                        {{-- <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" href="#" id="devices-link">
                            <span class="link-item">
                                <i class="fa fa-btc" ></i>
                                {{ __('Binance Wallet') }}
                            </span>
                        </a> --}}
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div id="exampleModal" class="modal fade"   tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h2>En estos momentos esta función no esta disponible</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {{-- <div class="modal-header">
                    <h2>Seleccione el método de retiro</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body grid-dashboard">
                        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" href="{{ route('monedero.create') }}" id="">
                            <span class="link-item">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                {{ __('Pago Movil') }}
                            </span>
                        </a>
                        <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" href="{{route('monedero.createTransfer')}}" id="devices-link">
                            <span class="link-item" >
                                <i class="fa fa-university" aria-hidden="true"></i>
                                {{ __('Transferencia Bancaria') }}
                            </span>
                        </a> 
                       <a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" href="#" id="devices-link">
                            <span class="link-item">
                                <i class="fa fa-btc" ></i>
                                {{ __('Binance Wallet') }}
                            </span>
                        </a>
                    </div>
                </div> --}}
                
            </div>
        </div>
    </div>
@endsection

@section('scritps')
    <script>
        $( "#saldos" ).hover(
            function() {
            $("#saldo-dolar").css("display", "block");
            $("#saldo-bs").css("display", "none");
            },
            function() {
            $("#saldo-dolar").css("display", "none");
            $("#saldo-bs").css("display", "block");
            }
        );
        
    </script>
   


@endsection