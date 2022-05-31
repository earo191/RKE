@extends('layouts.app_rke')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('banco.store')}}"  method="POST" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card">
                    <div class="card-header" id="headingOne" style="">
                        <h2 class="mb-0">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-mobile"></i>Añadir Tu Cuenta Bancaria
                            </button>
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row ">
    
                            <div class="col-md-6">
                                <label for="" class="labels">Seleccione Banco</label>
                                <select name="banco" class="form-control" onchange="codigo_banco_2()">
                                    @foreach($bancos as $banco)
                                    <option value="{{$banco->codigo}}">{{$banco->nombre}}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Nro Cuenta</label>
                                <div style="display: flex">
                                    <input id="codigo_banco" type="text" name="codigo_banco" class="form-control col-md-2" value="{{$bancos[0]->codigo}}"  style="pointer-events: none;">
                                    <input id="nro_cuenta" type="text" name="nro_cuenta" class="form-control @error('nro_cuenta') is-invalid @enderror" value="" >
                                    @error('nro_cuenta')
                                        <span class="invalid-feedback" style="margin-left: 4px;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <label for="" class="labels">Tipo Cuenta</label>
                                <select name="tipo_cuenta" class="form-control">
                                    <option value="1">Corriente</option>
                                    <option value="2">Ahorro</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Cedula</label>
                                <input id="cedula" type="text" name="cedula" class="form-control"  value="{{$user->cedula}}" style="pointer-events: none;">
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <label for="" class="labels">Seleccionar Como Cuenta Principal?</label>
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

@section('scripts')
    <script>
        function codigo_banco_2(){
            const banco_codigo = document.querySelector(`select[name='banco']`).value;
        
            document.querySelector(`input[name='codigo_banco']`).value = banco_codigo;
            
            console.log('hola')

        }
    </script>
@endsection