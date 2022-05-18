@extends('layouts.app_rke')

@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    &nbsp
                    <a href="{{route('pagomovil.create')}}" title="Crear banco"><span class="badge badge-primary"><i class="fas fa-plus-square fa-2x"></i></span></span></a>
                    &nbsp 
                    <h5 class="card-title">Añadir Nuevo Pago Movil</h5>
                &nbsp 
                @if(Session::has('mensaje'))
                    <div class="alert alert-alert-info justify-content-start text-start" role="alert">
                                {!!Session::get('mensaje')!!}
                        </div>
                        
                @endif

                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-12">
                        <table id="" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                        
                                <tr>
                                    <th>ID</th> 
                                    <th>cedula</th>
                                    <th>telefono</th>
                                    <th>Principal</th>
                                    <th>Acciones</th>
                                </tr>
                        
                            </thead>
                            <tbody>
                            @foreach($pagomovils as $pagomovil)
                                <tr>
                                    <th>{{$pagomovil->id}}</th> 
                                    <th>{{$pagomovil->cedula}}</th>
                                    <td>{{$pagomovil->telefono}}</td>
                                    @if ($pagomovil->principal == 1)
                                        <td>Si</td>
                                    @else
                                        <td>no</td>
                                    @endif
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