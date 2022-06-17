@extends('layouts.app_rke')
<title>Monedero - PlayRKE - transferir</title>
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form  action="{{route('monedero.storeTransfer')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card">
                    <div class="card-header" id="headingOne" style="">
                        <h2 class="mb-0">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Transferir saldo a usuario
                            </button>
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="labels">Seleccione Saldo Monedero</label>
                                <select id="monedero" name="monedero" class="form-control" onchange="">
                
                                    @foreach($monedero as $mone)
                                    <option value="{{$mone->saldo}}">{{$mone->saldo}}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="labels">Seleccione Usuario</label>
                                <select name="user" class="form-control" onchange="">
                                   
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->username}}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="labels">Monto a recargar</label>
        
                                    <input id="monto" type="text" name="monto" class="form-control @error('monto') is-invalid @enderror" value="" >
                                    @error('monto')
                                        <span class="invalid-feedback" style="margin-left: 4px;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col-md-2">
                                <div class="text-center">
                                    <br>
                                    <button id="enviar" class="btn btn-primary profile-button" type="submit"  >Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')

   
    
@endsection
