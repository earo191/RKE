<div class="col-md-12">

<form  method="POST" action="{{url('notificacion/rifapago')}}" > 
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="card">
    <div id="mensaj"></div>
    <div class="card-header" id="headingOne" style="">
      <h2 class="mb-0">
         <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-building"></i>Notificar Pagos
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
        Banco Emisar
       <div class="input-group mb-3">
           <select name="banco" class="form-control">
           	@foreach($Bancos as $bancos)
           	   <option value="{{$bancos->id_banco}}">{{$bancos->banco}}</option>
           	 @endforeach 
           </select>
        </div>
        Banco Receptor
       <div class="input-group mb-3">
           <select name="recep" class="form-control">
            @foreach($empresa as $empresa)
               <option value="{{$empresa->id_banco}}">{{$empresa->banco}}</option>
             @endforeach 
           </select>
        </div>
         Referencia
        <div class="input-group mb-3">
          <input type="text" class="form-control"  placeholder="Referencia Bancaria" name="Referencia" required  value="">
        </div>
          Descripcion del Pago
        <div class="input-group mb-3">
          <input required type="text" style="background:#fff;"  disabled class="form-control"  name="titular" placeholder="Nombre y Apellido" required value="{{$informacion->Descripción_rifa}}">
        </div>
          Numero a Pagar
        <div class="input-group mb-3">
          <input required type="text" style="background:#fff;"  disabled class="form-control"  name="titular" placeholder="Nombre y Apellido" required value="{{$informacion->numero}}">
        </div>
            Monto a Pagar 
          
               <div class="input-group mb-3">
                  <input  disabled required style="background:#fff;" type="text" class="form-control"   placeholder="" required value="{{$informacion->valor_tikek}}">
                  <input type="hidden" name="valor" value="{{$informacion->valor_tikek}}">
               </div>                                         
        
         Fecha de la Transacción Bancaria
        <div class="input-group mb-3">
          <input required type="date" class="form-control"  name="Fecha" placeholder="Nombre y Apellido" required value="">
        </div>
      <!--  <div class="input-group mb-3">
          <input type="text" name="cedula" class="form-control"  name="Cedula o Rif" placeholder="Cedula o Rif" required value="">

        </div>-->
        <input type="hidden" name="idcuentas" value="{{$informacion->id_usersrifa}}">
          <div class="text-center">
          <button class="btn btn-primary center-block" id="procesar"><i class="fas fa-save"></i>&nbspGuardar</button>
         </div>
      </div>

      
    </div>

  </div>
</form>
</div>
