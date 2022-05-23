@extends('layouts.app_rke')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    &nbsp
                    <a href="{{route('banco.create')}}" title="Añadir Cuenta bancaria"><span class="badge badge-primary"><i class="fas fa-plus-square fa-2x"></i></span></span></a>
                    &nbsp 
                    <h5 class="card-title">Añadir Nueva Cuenta Bancaria</h5>
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
                        <div class="table-responsive">
                            <table id="" class="table table-bordered table-striped" style="width:100%">
                                <thead>
                            
                                    <tr>
                                        <th>ID</th> 
                                        <th>Nro Cuenta</th>
                                        <th>Banco</th>
                                        <th>Tipo Cuenta</th>
                                        <th>Principal</th>
                                        <th>Acciones</th>
                                    </tr>
                            
                                </thead>
                                <tbody>
                                @foreach($cuentas as $cuenta)
                                    <tr>
                                        <th>{{$cuenta->id}}</th> 
                                        <th>{{$cuenta->Nro_Cuenta}}</th>
                                        <td>{{$cuenta->banco->nombre}}</td>
                                        @if ($cuenta->Tipo_cuenta == 1)
                                            <td>Corriente</td>
                                        @else
                                            <td>Ahorro</td>
                                        @endif
                                        @if ($cuenta->principal == 1)
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
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    </div>


@endsection