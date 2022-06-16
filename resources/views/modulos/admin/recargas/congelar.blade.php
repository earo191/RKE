@extends('layouts.app_rke')

@section('content')
<div class="row">
    <div class="col-md-12">
        <form action="{{route('recarga.store')}}"  method="POST" ">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="card">
                <div id="mensaj"></div>
                <div class="card-header" id="headingOne" style="">
                    <h2 class="mb-0">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-money-check"></i>Congelar Recarga
                        </button>
                    </h2>
                </div>
               
                    <div class="card-body">
                        <div class="row ">
                            <input id="user_id" type="hidden" name="user_id" class="form-control"  value="{{$recarga->usuario_id}}" >
                            <input id="id_recarga" type="hidden" name="id_recarga" class="form-control"  value="{{$recarga->id}}" >

                            <div class="col-md-6">
                                <label class="labels">Monto</label>
                                <input id="monto" type="text" name="monto" class="form-control"  value="{{$recarga->monto}}" >
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Fecha Recarga</label>
                                <input id="fecha" type="date" name="fecha_recarga" class="form-control" value="{{$recarga->fecha_recarga}}" style="pointer-events: none;">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <label class="labels">Referencia</label>
                                <input id="referencia" type="text" name="referencia" class="form-control"  value="{{$recarga->referencia}}" style="pointer-events: none;">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Descripcion</label>
                                <input id="descripcion" type="text" name="descripcion" class="form-control" value="{{$recarga->descripcion}}" style="pointer-events: none;">
                            </div>
                            
        
                        </div>
                        <div class="mt-5 text-center">
                            <button id="save_profile" class="btn btn-primary profile-button" type="submit"  >Guardar</button>
                        </div>
                    </div>               
                
            </div>
           
        </form>
    </div>
    
</div>
@endsection