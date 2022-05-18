@extends('layouts.app_rke')

@section('content')
    <div class="content">
        <div class="card card-body text-center" id="card1">

            <div class="row">

                <div class="col-md-0">
                    <div class="circulo">
                        <audio loop id="audioelement">
                            <source src="{{ asset('musica/trivia/' . $trivia['audio']) }}" type="audio/mpeg">

                        </audio>
                        <a href="#"> 

                        {{-- <audio src="{{ asset('musica/trivia/' . $trivia['audio'] ) }}" type="audio/mpeg" loop></audio> --}}

                        


                        <i class="fas fa-solid fa-music"></i>

                        </a>

                    </div>
                    <div class="circulo">
                        <i class="fas fa-solid fa-wrench"></i>
                    </div>
                </div>

                <div class="col-md-2">
                    <div id="estadistica">
                        Premio
                    </div>
                    <div id="estadistica">
                        jugadores
                    </div>
                </div>

                <div class="col-md-7 justify-content-center">
                    <div id="titulo">
                        {{ $trivia['nombre'] }}
                    </div>
                    <div class="col-md-5 mx-auto" id="subtitulo">
                        <span>donde solo los mejores ganan</span>
                    </div>
                </div>

                <div class="col-md-2">
                    <div id="estadistica">
                        sigue en juego
                    </div>
                    <div id="estadistica">
                        cupos disponibles
                    </div>
                </div>

                <div class="col-md-0">
                    <div class="circulo">
                        50/50
                    </div>
                    <div class="circulo">
                        Salto
                    </div>
                </div>

            </div>




            
            <div class="card card-body" id=card2>


                <div class="row">

                    <div class="col-md-12">
                        <div id="pregunta">
                            pregunta
                            {{-- {{ $pregunta ['pregunta'] }} --}}

                        </div>


                    </div>


                    <div class="col-md-6">
                        <button class="col-md-12" id="opcion">opcion 1</button>

                    </div>


                    <div class="col-md-6">
                        <button class="col-md-12" id="opcion">opcion 2</button>

                    </div>
                    <br>

                    <div class="col-md-6">
                        <button class="col-md-12" id="opcion">opcion 3</button>

                    </div>

                    <div class="col-md-6">
                        <button class="col-md-12" id="opcion">opcion 4</button>

                    </div>
                </div>


            </div>





            numero de preguntas
        </div>
    </div>
@endsection

<style>
    @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

</style>

<script>
    const playSound = function() {
        document.getElementById('audioelement').play();
        document.removeEventListener('click', playSound);
    }
    document.addEventListener('click', playSound);
    </script>
