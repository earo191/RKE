@extends('layouts.app_rke')

@section('content')

            
                     
                                   
                                    <div class="card card-body">

                                        
                                            <div class="row">

                                                @foreach($trivias as $trivia)

                                                    <div class="col-md-2">
                                                            
                                                            {{-- <button class="button">
                                                               
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span> 
                                                                <img src="imgSystema/imgTrivia/{{$trivia->imagen}}" height ="100%" width="100%" alt="{{$trivia->imagen}}" /> 
                                                                <div class="texto-arriba">
                                                                    {{$trivia->nombre}}
                                                                </div>
                                                              </button> --}}

                                                             <a href="{{url('trivia/'.$trivia->id)}}">

                                                                    <div class="card-trivia mt-3" >
                                                                                <img class="img-fluid " src="imgSystema/imgTrivia/{{$trivia->imagen}}" height ="100%" width="100%" alt="{{$trivia->imagen}}" /> 
                                                                                <div class="texto-arriba">
                                                                                    {{$trivia->nombre}}
                                                                                </div>
                                                                    </div>

                                                                    <audio loop id="audioelement">
                                                                        <source src="musica/trivia/{{$trivia->audio}}" type="audio/mpeg">
                                                                        
                                                                    </audio>
                                                                    
                                                                </a>
                                                            
                                                            

                                                        </div>

                                                        


                                                

                                                @endforeach 

                                                
                                            </div>
                                            <!-- /.row -->
                                    </div>
                    

                      @endsection

                      <script>
                        const playSound = function() {
                            document.getElementById('audioelement').play();
                            document.removeEventListener('click', playSound);
                        }
                        document.addEventListener('click', playSound);
                        </script>