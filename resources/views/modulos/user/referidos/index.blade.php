@extends('layouts.app_rke')

@section('content')
    <div class="card">
        
        <div class="card-header">
            Link para tus referidos
            <div class="input-group">
                <input type="text" class="form-control" id="referralLink" readonly value="{{$referralLink}}">
                <div class="input-group-append">
                    <button class="btn btn-primary" style="width: 154px;height: 38px;" onclick="copyReferralLink()">
                        <i class="fa fa-copy"></i> Copiar
                    </button>
                </div>
            </div>
        
        </div>
        
        <div class="card-header">
            <h4>Listado de referidos</h4>
        </div>

        <div class="card-body">
            
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                        
                                <tr>
                                    <th>Id</th> 
                                    <th>Username</th>
                                    <th>email</th>
                                </tr>
                        
                            </thead>
                            <tbody>
                            @foreach($referidos as $refe)
                                <tr>
                                    <th>{{$refe->id}}</th> 
                                    <th>{{$refe->username}}</th>
                                    <td>{{$refe->email}}</td>                            
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
@endsection


@section('scripts')

    <script>
        function copyReferralLink() {
            var input = document.getElementById("referralLink");

            // Select the input
            input.select();
            // For mobile devices
            input.setSelectionRange(0, 99999); 

            // Copy the text inside the input
            document.execCommand("copy");

            // Confirmed copied text
            alert("Your referral link has been copied: " + input.value);
        }
    </script>
    
@endsection