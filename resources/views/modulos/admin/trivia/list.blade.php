@extends('layouts.app_rke')

@section('header')
    <style>
        .img-trivia{
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            height: auto;
            padding: 1rem;
            text-align: center;
        }
        .img-trivia .widget-user-image {
            left: 50%;
            margin-left: -45px;
            position: absolute;
            top: 80px;
        }
        .img-trivia-image{
            max-width: 100% !important;
            height: 250px !important;
        }
        .card-footer {
            
            border-top: unset !important;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($trivias as $trivia)
                <div class="col-md-4">
                    <div class="card img-trivia">
                        <div class="widget-user-header">
                            <img class="img-fluid img-trivia-image" src="{{asset('imgSystema/imgTrivia/'.$trivia->imagen)}}" alt="Trivia imagen">
                            
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="{{asset('imgSystema/logo.png')}}" alt="User Avatar">
            
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col">
                                    <button id="imgg" class="btn btn-info form-control btn-block" data-toggle="modal" data-target="#myModal" data-img="{{asset('imgSystema/imgTrivia/'.$trivia->imagen)}}">Ver</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            @endforeach
        </div>
    </div>
@endsection