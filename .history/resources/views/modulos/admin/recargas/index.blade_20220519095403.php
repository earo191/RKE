@extends('layouts.app_rke')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">Recargas por aceptar</h1>
                <div class="row">
                <div class="col-12">
                    <table id="" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                    
                            <tr>
                                <th>ID</th> 
                                <th>Monto</th>
                                <th>Fecha</th>
                                <th>Banco Emisor</th>
                                <th>Referencia</th>
                                <th>Descripción</th>
                                <th>Estatus</th>
                                <th>Usuario</th>
                                <th>Banco</th>
                                <th>Acciones</th>
                            </tr>
                    
                        </thead>
                        <tbody>
                        @foreach($esperas as $recarga)
                            <tr>
                                <th>{{$recarga->id}}</th> 
                                <th>{{$recarga->monto}}</th>
                                <td>{{$recarga->fecha_recarga}}</td>
                                @foreach($bancos as $banco)
                                @if($banco->id == $recarga->banco_emisor )
                                <td>{{$banco->nombre}}</td>
                                @endif
                                @endforeach
                                <td>{{$recarga->referencia}}</td>
                                <td>{{$recarga->descripcion}}</td>
                                @if($recarga->estatus == 0)
                                <td class="btn-danger text-center">Por aceptar</td>                                                                
                                @else
                                <td><span >Aceptado</span></td> 
                                @endif
                                @foreach($users as $user)
                                @if($user->id == $recarga->usuario_id )
                                <td>{{$user->name}}</td>
                                @endif
                                @endforeach
                                @foreach($bancos as $banco)
                                @if($banco->id == $recarga->banco_id )
                                <td>{{$banco->nombre}}</td>
                                @endif
                                @endforeach
                                <th>
                                    <a href="{{url('recarga/'.$recarga['id'])}}" >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="3" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="M9 12l2 2l4 -4" />
                                          </svg>
                                    </a>
                                   
                                </th>
                            </tr>
                        @endforeach          

                        </tbody>
                    </table>
                </div>
                </div>
                <!-- /.row -->
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h1 class="text-center">Recargas aceptadas</h1>
                <div class="row">
                <div class="col-12">
                    <table id="" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                    
                            <tr>
                                <th>ID</th> 
                                <th>Monto</th>
                                <th>Fecha</th>
                                <th>Banco Emisor</th>
                                <th>Referencia</th>
                                <th>Descripción</th>
                                <th>Estatus</th>
                                <th>Usuario</th>
                                <th>Banco</th>
                                <th>Acciones</th>
                            </tr>
                    
                        </thead>
                        <tbody>
                        @foreach($recargas as $recarga)
                            <tr>
                                <th>{{$recarga->id}}</th> 
                                <th>{{$recarga->monto}}</th>
                                <td>{{$recarga->fecha_recarga}}</td>
                                @foreach($bancos as $banco)
                                @if($banco->id == $recarga->banco_emisor )
                                <td>{{$banco->nombre}}</td>
                                @endif
                                @endforeach
                                <td>{{$recarga->referencia}}</td>
                                <td>{{$recarga->descripcion}}</td>
                                @if($recarga->estatus == 0)
                                <td>Por aceptar</td>                                                                
                                @else
                                <td class="btn-success">Aceptado</td> 
                                @endif
                                @foreach($users as $user)
                                @if($user->id == $recarga->usuario_id )
                                <td>{{$user->name}}</td>
                                @endif
                                @endforeach
                                @foreach($bancos as $banco)
                                @if($banco->id == $recarga->banco_id )
                                <td>{{$banco->nombre}}</td>
                                @endif
                                @endforeach
                                <th>
                                    {{-- <a href="{{url('recarga/'.$recarga['id'])}}" >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="3" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="M9 12l2 2l4 -4" />
                                          </svg>
                                    </a> --}}
                                   
                                </th>
                            </tr>
                        @endforeach          

                        </tbody>
                    </table>
                </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
</div>

@endsection