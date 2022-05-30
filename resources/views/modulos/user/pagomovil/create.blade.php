@extends('layouts.app_rke')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('pagomovil.store')}}"  method="POST" ">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card">
                    <div class="card-header" id="headingOne" style="">
                        <h2 class="mb-0">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-mobile"></i>Crear Pago Movil
                            </button>
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <label class="labels">Cedula</label>
                                <input id="cedula" type="text" name="cedula" class="form-control"  value="{{$user->cedula}}" style="pointer-events: none;">
                            </div>
                            <div class="col-md-2">
                                <label class="labels">Telefono</label>
                                <select class="form-control" name="codigo_telefono" id="">
                                    <option value="0412">0412</option>
                                    <option value="0414">0414</option>
                                    <option value="0424">0424</option>
                                    <option value="0426">0426</option>
                                    <option value="0416">0416</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="labels">Numero</label>
                                <input id="telefono_pago" type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" >
                                @error('telefono')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <label class="labels">Rif</label>
                                <input id="rif" type="text" name="rif" class="form-control @error('rif') is-invalid @enderror"  value="" >
                                @error('rif')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" class="labels">Seleccione Banco</label>
                                <select name="banco" class="form-control">
                                    @foreach($bancos as $banco)
                                    <option value="{{$banco->id}}">{{$banco->codigo}}-{{$banco->nombre}}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <label for="" class="labels">Seleccionar Como Principal?</label>
                                <select name="principal" class="form-control">
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>

                        </div>
                        <div class="mt-5 text-center">
                            <button id="savePago" class="btn btn-primary profile-button" type="submit"  >Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection