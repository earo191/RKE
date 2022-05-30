@extends('layouts.app_rke')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header " id="div-active">
                    <h1><span>Perfil : {{ $user->username }}</span></h1>
                    <button class="btn btn-primary" id="Activate">
                        Editar
                        <i class="fas fa-edit"></i>
                    </button>
                </div>
                <form action="{{ route('usuario.update', $user->id) }}" method="post" enctype="multipart/form-data" name="form">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="card-body ">
                        <div class="row ">
                            <div class="col-md-6">
                                <label class="labels">Nombre</label>
                                <input id="nombre" type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ $user->name }}"  disabled>
                                @error('name')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Apellido</label>
                                <input id="apellido" type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror"
                                    value="{{ $user->apellido }}" disabled>
                                @error('apellido')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-6">
                                <label class="labels">Cedula</label>
                                <input id="cedula" type="text" name="cedula" class="form-control @error('cedula') is-invalid @enderror"
                                    value="{{ $user->cedula }}" disabled>
                                @error('cedula')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">


                                <label class="labels">Pais</label>

                                <select id="pais" name="pais_id" class="form-control @error('country') is-invalid @enderror" disabled>
                                    
                                    @if (Count($pai) != 0 )
                                        <option value="{{ $pai[0]->id }}">{{ $pai[0]->name }}</option>
                                    @endif
 
                                    @foreach ($paices as $pais)
                                        <option value="{{ $pais->id }}">{{ $pais->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <label class="labels">Email </label>
                                <input id="email" type="text" class="form-control" name="email"
                                    value="{{ $user->email }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Username</label>
                                <input id="username" type="text"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ $user->username }}" autocomplete="username" disabled>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="labels">Telefono</label>
                                <input id="phone" type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ $user->phone }}" disabled>
                                @error('phone')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">

                                <img src="imgSystema/imgUsers/{{ $user->foto }}" alt="">
                                <label class="labels">Foto</label>
                                <input id="foto" type="file" name="foto" class="form-control"
                                disabled>
                            </div>

                        </div>

                        <div class="mt-5 text-center">

                            <button id="guardar" class="btn btn-primary profile-button" type="submit" disabled>Guardar
                                Perfil</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var activarButton = document.getElementById('Activate');

        var idsCampos = ['nombre', 'apellido', 'cedula', 'phone','foto', 'pais','guardar'];

        activarButton.addEventListener('click', function() {
            idsCampos.forEach(function(idCampo) {
                elem = document.getElementById(idCampo);
                elem.disabled = false;
            });
        });
    </script>
@endsection
