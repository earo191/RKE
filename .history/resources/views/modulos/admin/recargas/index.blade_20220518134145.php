@extends('layouts.app_rke')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
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
                                <td>{{$recarga->banco_emisor}}</td>
                                <td>{{$recarga->referencia}}</td>
                                <td>{{$recarga->descripcion}}</td>
                                <td>{{$recarga->estatus}}</td>
                                <td>{{$recarga->usuario_id}}</td>
                                <td>{{$recarga->banco_id}}</td>
                                <th>
                                    <a href="" class="btn  btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn  btn-danger"><i class="fa fa-trash"></i></a>
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