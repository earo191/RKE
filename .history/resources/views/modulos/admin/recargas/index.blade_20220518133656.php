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
                                <th>telefono</th>
                                <th>Principal</th>
                                <th>Acciones</th>
                            </tr>
                    
                        </thead>
                        <tbody>
                        @foreach($recargas as $recarga)
                            <tr>
                                <th>{{$recarga->id}}</th> 
                                <th>{{$recarga->monto}}</th>
                                <td>{{$recarga->referencia}}</td>
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