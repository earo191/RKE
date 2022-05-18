@extends('layouts.app_rke')

@section('header')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

        #card1{
            border-radius: 35px !important;
        }
        #image-logo{
            width: 100%;
        }
        #pregunta {
            height: 63px;
            display: flex;
        }
        #estadistica{
            height: 27%;
            border: 2px solid 	#1E90FF;
            border-radius: 30px;
        }
        #bote-sigue{
            color: #00e084;
            font-weight: 800;

        }
        #juego-disponible{
            color: #e2fdff;
            font-weight: 800;
        }
        .musica-50{
            background-color: rgb(255 0 0);
            border-radius: 20px;
            width: 40px;
            height: 40px;
            margin-top: -7px;
            margin-left: 80px;

        }
        .confi-comodin{
            margin-top: 30px !important;
        }
        .config {
            background-color: rgb(255 0 0);
            border-radius: 20px;
            width: 40px;
            height: 40px;
            margin-top: 16px;
            margin-left: 80px;
        }
        .comodin-5050{
            background-color: rgb(255 0 0);
            border-radius: 20px;
            width: 40px;
            height: 40px;
            margin-top: -7px;
            margin-left: -14px;
            font-size: 13px;
            font-weight: 800;
            padding-top: 9px;
        }
        .salto{
            background-color: rgb(255 0 0);
            border-radius: 20px;
            width: 40px;
            height: 40px;
            margin-top: 17px;
            margin-left: -14px;
            font-size: 13px;
            font-weight: 800;
            padding-top: 9px;
        }
        i.fas.fa-solid.fa-music {
            padding-top: 12px;
        }
        i.fas.fa-solid.fa-wrench {
            padding-top: 12px;
        }
        div#card2 {
            width: 90%;
            margin-left:82px;
        }
        .contador{
            font-size: 50px !important;
            font-weight: 700;
            color: rgb(227 0 0);
        }
        .pregunta-titulo{
            font-size: 26px !important;
            padding-top: 10px;
            font-weight: 800;
        }
        .img-pregunta{
            max-width: 86%;
            background-color: rgb(248 250 252);
            border: 1px solid rgb(222 226 230);
            border-radius: 0.25rem;
        }
        .img-pregunta-position{
            padding-top: 35px;
        }
        .numero-pregunta{
            font-size: 23px;
            font-weight: 800;
        }
        .opcion-ad{

        }
    </style>
    
@endsection

@section('content')

    <div class="content">
        <div class="card card-body text-center" id="card1" >
            
            <div class="row">

                <div  class="col-md-1 confi-comodin">
                    <div class="musica-50">
                        <i class="fas fa-solid fa-music"></i>
                    </div>
                    <div class="config">
                        <i class="fas fa-solid fa-wrench"></i>
                    </div>
                </div>
            
                <div class="col-md-2">
                    BOTE A REPARTIR
                    <div id="estadistica">
                        <h3 id="bote-sigue">
                            Bs 1284,23
                        </h3>
                    </div>
                    JUGADORES EN JUEGO
                    <div id="estadistica">
                        <h4 id="juego-disponible">
                            355
                        </h4>
                    </div>
                </div>

                <div class="col-md-6 justify-content-center">
                    <div  id="titulo">
                        <img src="{{ asset('imgSystema/pds.png') }}" alt="" id="image-logo">
                    </div>
                    
                </div>

                <div class="col-md-2">
                    SIGUE EN JUEGO
                    <div id="estadistica">
                        <h3 id="bote-sigue">
                            Foxs22 
                        </h3>
                    </div>
                    CUPOS DISPONIBLES
                    <div id="estadistica">
                        <h4 id="juego-disponible">
                            320
                        </h4>
                    </div>
                </div>

                <div class="col-md-1 confi-comodin">
                    <div class="comodin-5050">
                        50/50
                    </div>
                    <div class="salto">
                        Salto
                    </div>
                </div>

            </div>

            <div class="card card-body" id="card2">                
                
                
                <div class="row" >
                    
                    <div class="col-md-12" id="pregunta">
                        
                        <div id  class="col-md-2">
                            <h1 class="contador">18</h1>
                        </div>
                        <div class="col-md-8">
                            <h1 class="pregunta-titulo">¿Donde está situada la Foza de las marina ?</h1>
                        </div>
                        <div id  class="col-md-2">
                            <h1 class="contador">18</h1>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-5">
                        <button class="col-md-12"  id="opcion" class=" opcion-ad">A . Oceano Artico</button>
                        
                        <button class="col-md-12" id="opcion">opcion 3</button>
                    </div>
                
                    <div class="col-md-2 img-pregunta-position">
                        <img src="{{ asset('imgSystema/fosaMarinas.jpg') }}" class="img-pregunta"  id="">
                    </div>
                                    
                    <div class="col-md-5">

                        <button class="col-md-12" id="opcion">opcion 2</button>
                        <button class="col-md-12"  id="opcion" class="opcion-ad">A . Oceano Artico</button>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="numero-pregunta">05/10</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection


