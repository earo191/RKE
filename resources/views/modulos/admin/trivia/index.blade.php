@extends('layouts.app_rke')

@section('content')

            
                      <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        &nbsp
                                        <a href="{{route('trivia.create')}}" title="Crear Trivia"><span class="badge badge-primary"><i class="fas fa-plus-square fa-2x"></i></span></span></a>
                                        &nbsp 
                                        <h5 class="card-title">Crear Nueva Trivia</h5>
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
                                                <table id="example1" class="table table-bordered table-striped" style="width:100%">
                                                    <thead>
                                                
                                                        <tr>
                                                            <th>ID</th> 
                                                            <th>Nombre</th>
                                                            <th>Incripcion</th>
                                                            <th>Fecha trivia</th>
                                                            <th>Hora</th>
                                                            <th>imagen</th>
                                                            <th>Musica</th>
                                                        </tr>
                                                
                                                    </thead>
                                                    <tbody>
                                                    @foreach($trivias as $trivia)
                                                            <tr>
                                                            <th>{{$trivia->id}}</th> 
                                                            <th>{{$trivia->nombre}}</th>
                                                            <td>{{$trivia->precio}}</td>
                                                            <td>{{$trivia->fecha}}</td>
                                                            <td>{{$trivia->hora}}</td>
                                                            <td>{{$trivia->imagen}}</td>
                                                            <td>{{$trivia->audio}}</td>
                                                            </tr>
                                                    @endforeach          

                                                    </tbody>
                                                </table>
                                            <div class="table-responsive">
                                        </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                </div>
                            </div>
                      </div>

                      @endsection