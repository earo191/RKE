@extends('layouts.app_rke')



@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="info-box">
                        
                        <div class="info-box-content"  >
                            <span style="font-size: 18px;">Saldo disponibles</span>
                            
                            <div id="saldos" class="saldos">
                                <span id="saldo-bs" class="info-box-number">{{$monedero->saldo}} Bs</span>
                                <span id="saldo-dolar" style="display: none;" class="info-box-number">{{number_format($monedero->saldo / $tasa[0]->tasa_RKE,2)}}  $</span>
                            </div>
                        </div>
                        
    
                        
                    </div>
    
                </div>
                <div class="col-md-3" style="">
                    <a href="" title="Recargar Saldo" style="" data-target="#exampleModalLong" data-toggle="modal">
                        <div class="info-box">
                               
                            <div class="info-box-content">
                                
                                <span class="" style="font-size: 25px;">DEPOSITO</span>
                                
                            </div>
                            <span class="info-box-icon bg-info elevation-1">
                                <i class="fas fa-plus-square fa-2x"></i>
                                
                            </span>  
                            
                        </div>
                    </a>
                    
                </div>
                <div class="col-md-3">
                    <a href="" title="Retirar Saldo" style="" data-target="#exampleModal" data-toggle="modal">
                        <div class="info-box">
                            <span class="info-box-icon bg-danger elevation-1">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                
                            </span>                                        
                            <div class="info-box-content">
                                
                                <span class="" style="font-size: 25px;">RETIRAR</span>
                                
                            </div>
                                                                
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dollar-sign"></i></span>
        
                        <div class="info-box-content">
                            <span class="info-box-text">1 Dolar </span>
                            <span class="info-box-number">
                                {{$tasa[0]->tasa_RKE}}
                            </span>
                        </div>
                        
                    </div>
                </div>
                
            </div>  
            <div class="card">
                
               
                <div class="card-body">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <h4>Recargas Realizadas </h4>
                        <div class="table-responsive">
                            <table id="" class="table table-bordered table-striped dt-responsive" style="width:100%">
                    
                                <thead>
                                    <tr>
                                        <th>ID Recarga</th> 
                                        <th>Monto</th>
                                        <th>Fecha</th>
                                        <th>Referencia</th>
                                        <th>Descripcion</th>
                                        <th>Estado</th>
                                    </tr>
                                
                                </thead>
                                <tbody>
                                    @foreach($recargas  as $recarga)
                                    <tr>
                                        <th>{{$recarga->id}}</th> 
                                        <th>{{$recarga->monto}}</th>
                                        <th>{{$recarga->fecha_recarga}}</th>
                                        <td>{{$recarga->referencia}}</td>
                                        <td>{{$recarga->descripcion}}</td>
                                        @if ($recarga->estatus == 0)
                                            <td>
                                                <a class="a-edit btn  btn-danger">En espera</a>
                                            </td>
                                        @else
                                            <td>
                                                <a class="a-edit btn  btn-success">Aprobada</a>
                                            </td>
                                        @endif
            
                                    </tr>
                                    @endforeach          
                    
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
                    <h2>Seleccione el metodo de recarga</h2>
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
                    <h2>En estos momentos esta funcion no esta disponible</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                {{-- <div class="modal-header">
                    <h2>Seleccione el metodo de Retiro</h2>
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

