@extends('layouts.app_rke')

@section('content')

        <div class="row">
               <div class="col md 12">
                    <ul>
                        @foreach ($errors -> all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </ul>
                    <form action="{{route('trivia.store')}}"  method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="card">
                            
                            <div class="card-header" id="headingOne" style="">
                                <h2 class="mb-0">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-building"></i>Informacion de La trivia
                                    </button>
                                </h2>
                                <div class="card-body">
                                    Nombre
                                        <div class="input-group mb-3">
                                            <input type="text" name="nombre" value="{{old('nombre', $data->nombre ?? '')}}"  class="form-control">
                                        
                                        </div>
                                    Imagen
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control"  placeholder="imagen" value="{{old('imagen', $data->imagen ?? '')}}" name="imagen" required >
                                    </div>
                                    Fecha Trivia
                                    <div class="input-group mb-3">
                                        <input type="date" name="fecha" class="form-control"  value="{{old('fecha', $data->fecha ?? '')}}" required >

                                    </div>
                                    Precio de la trivia
                                    <div class="input-group mb-3">
                                        <input type="text" name="precio" class="form-control"  value="{{old('precio', $data->precio ?? '')}}" required >
                                    </div>
                                    hora Solteo
                                    <div class="input-group mb-3">
                                        <input type="text" name="hora" class="form-control" value="{{old('hora', $data->hora ?? '')}}" required >
                                    </div>
                                    Pista audio de la trivia
                                    <div class="input-group mb-3">
                                        <input type="file" name="audio" class="form-control"   required >
                                    </div>
                                    
                                </div>

                                <div class="card-body">

                                <!-- Preguntas -->
                                    <h5>Preguntas de la trivia</h5>
                                    <div class="preguntas">


                                        @for ($i = 1; $i <= 1; $i++)
                                            



                                        <div id="pregunta1">
                                            Pregunta Nº {{ $i }} 
                                            <div class="row">
                                                
                                                <div class="input-group mb-3 col-md-6">
                                                    <input type="text" name="pregunta_{{ $i }}" class="form-control" required>
                                                </div>
                                                <div class="input-group mb-3 col-md-6">
                                                    <input type="file" name="imagen_pregunta{{ $i }}" class="form-control" >
                                                </div>
                                            </div>
                                            
                                            <h6>Respuestas</h6>
                                            <div class="row">
                                                
                                                <div class="imput-group col-md-3">
                                                    Correcta
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="preg_{{ $i }}_correcta" class="form-control" required>
                                                    
                                                    </div>
                                                </div>
                                                <div class="imput-group col-md-3">
                                                    Opciones incorrectas 
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="pregunta{{ $i }}_op_1" class="form-control" required>
                                                    
                                                    </div>
                                                </div>
                                                <div class="imput-group col-md-3">
                                                    Opciones incorrectas 
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="pregunta{{ $i }}_op_2" class="form-control" required>
                                                    
                                                    </div>
                                                </div>
                                                <div class="imput-group col-md-3">
                                                    Opciones incorrectas 
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="pregunta{{ $i }}_op_3" class="form-control" required>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endfor

                                        
                                    </div>
                                <!-- Preguntas -->
                            </div>


                            <div class="text-center">
                                <button class="btn btn-primary center-block" type="submit" value="enviar"><i class="fas fa-save"></i>&nbspGuardar</button>
                            </div>
                            </div>
                        </div>
                    
                    </form>
                </div>      
        </div>
@endsection