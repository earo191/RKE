@extends('layouts.app_rke')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('monedero.store')}}"  method="POST" ">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card">
                    <div id="mensaj"></div>
                    <div class="card-header" id="headingOne" style="">
                        <h2 class="mb-0">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-money-check"></i>Recargar Saldo al monedero
                            </button>
                        </h2>
                    </div>
                    @if (Count($pagoMovil) != 0)
                        <div class="card-body">
                            <div class="row ">
                                <input type="hidden" name="id_banco" id="id_banco" value="{{$pagoMovil[0]->banco->id}}">
                                <div class="col-md-6">
                                    <label class="labels">Codigo - Banco</label>
                                    <input id="codigo_banco" type="text" name="codigo_banco" class="form-control" value="{{$pagoMovil[0]->banco->codigo}} --{{$pagoMovil[0]->banco->nombre}}" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label class="labels">Cedula</label>
                                    <input id="cedula" type="text" name="cedula" class="form-control"  value="{{$pagoMovil[0]->cedula}}" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label class="labels">Telefono</label>
                                    <input id="tlf_admin" type="text" name="tlf_admin" class="form-control" value="{{$pagoMovil[0]->telefono}}" disabled>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6">
                                    <label class="labels">Monto</label>
                                    <input id="monto" type="text" name="monto" class="form-control"  value="" >
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Fecha Recarga</label>
                                    <input id="fecha" type="date" name="fecha_recarga" class="form-control" value="" >
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6">
                                    <label class="labels">Referencia</label>
                                    <input id="referencia" type="text" name="referencia" class="form-control"  value="" >
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="labels">Seleccione Banco Emisor </label>
                                    <select name="banco_emisor" class="form-control">
                                    @foreach($bancos as $banco)
                                    <option value="{{$banco->id}}">{{$banco->codigo}}-{{$banco->nombre}}</option>
                                    @endforeach 
                                </select>
                                </div>
            
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label class="labels">Descripcion</label>
                                        <input id="descripcion" type="text" name="descripcion" class="form-control" value="" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-5 text-center">
                                <button id="save_profile" class="btn btn-primary profile-button" type="submit"  >Guardar</button>
                            </div>
                        </div>
                    @else
                   
                        <div class="car-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert" style="display: flex">
                                        <div class="col-md-6">
                                            <strong>Actualmente No posee un Pago Movil Registrado en PLAYRKE</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{route('pagomovil.create')}}">Click aquí para crear uno</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    
                    
                </div>
               
            </form>
        </div>
        
    </div>
@endsection

