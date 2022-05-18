
<div class="col-md-12">

<form  method="POST" action="{{url('rifas/insert/new')}}" enctype="multipart/form-data"> 
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="card">
    <div id="mensaj"></div>
    <div class="card-header" id="headingOne" style="">
      <h2 class="mb-0">
         <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-building"></i>Informacion de La Rifa
        </button>
      </h2>
        @foreach ($errors->all() as $error)
              <div style="justify-content:center;">
                <div class="alert alert-danger justify-content-center"   role="alert" style="width:70%">
                     	<span style="text-align:center;">
                       El Numero de Cuenta  Sumintrado ya Pertene a un usuario del Sistema , por favor verifique sus datos
                       </span>
                </div>
              </div>
         @endforeach
    </div>

 <div id="collapseOne"  aria-labelledby="headingOne" data-parent="">
      <div class="card-body">
       
         Descripción
        <div class="input-group mb-3">
        	<input type="text" name="descripcion"   class="form-control">
          
        </div>
         Imagen
        <div class="input-group mb-3">
          <input type="file" class="form-control"  placeholder="imagen" value="" name="imagen" required >
        </div>
         Premio
        <div class="input-group mb-3">
          <input required type="text" class="form-control"  name="premio" placeholder="Primio" required >
        </div>
        Fecha Solteo
        <div class="input-group mb-3">
          <input type="date" name="fecha" class="form-control"  required >

        </div>
         Valor  del Ticket
        <div class="input-group mb-3">
          <input type="text" name="valor" class="form-control"  required >
        </div>
         Cantidad  de Ticket a General
        <div class="input-group mb-3">
          <input type="text" name="numeros" class="form-control"  required >
        </div>
        Loteria
        <div class="input-group mb-3">
          <input type="text" name="loteria" class="form-control"  required >
        </div>
        hora Solteo
        <div class="input-group mb-3">
          <input type="text" name="hora" class="form-control"  required >
        </div>

          <div class="text-center">
          <button class="btn btn-primary center-block" id="procesar"><i class="fas fa-save"></i>&nbspGuardar</button>
        </div>
      </div>

      
    </div>

  </div>
</form>
</div>
