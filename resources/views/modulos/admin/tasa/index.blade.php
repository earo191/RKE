@extends('layouts.app_rke')

@section('header')
  <style>
    input{
      background-color: none !important;
    }
  </style>
    
@endsection

@section('content')

<div class="row">
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h1 class="text-left">
          Configuracion de la tasa de Dolar RKE
        </h1>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <div class="fecha">
              <h4>Fecha: <span id="al"></span></h4>
              
            </div>
            <div class="cotizacion">
              <h4>Transferencia : <span id="texto"></span></h4>
              <h4>Sicad: <span id="texto2"></span></h4>
            </div>
          </div>
          <div class="col-md-8">
            <h3>Añadir Porcentaje dolar RKE</h3>
            <form  action="{{route('tasa.store')}}"  method="POST" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                <div class="col-md-2">
                  <label class="labels">Dolar Api</label>
                  <input id="dolar_api" type="text" name="dolar_api" class="form-control" style="pointer-events: none;">
                </div>
                <div class="col-md-3">
                  <label class="labels">Añadir Porcentaje</label>
                  <input id="porcentaje_dolar" type="text" name="porcentaje_dolar" class="form-control" onchange="porcentaje()"  pattern="[0-9]+">
                </div>
                <div class="col-md-3">
                  <label class="labels">Total RKE dolar</label>
                  <input id="dolar_rke" type="text" name="dolar_rke" class="form-control" style="pointer-events: none;">
                </div>
                <div class="col-md-2">
                  <br>
                  <button id="saveTasa" class="btn btn-primary" type="submit"  >Guardar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- 
<div class="col-md-12">
    
      <div class="card">
        <h6>Fecha: </h6>
        <div id="al"></div>
        <h6>Transferencia: </h6>
        <div id="texto"></div>
        <h6>Sicad: </h6>
        <div id="texto2"></div>
            
      </div>
    
</div> --}}
    
@endsection

@section('scripts')

    <script>
      function porcentaje() {
        const api_dolar = document.querySelector(`input[name='dolar_api']`).value;
        // document.querySelector(`input[name='gastos_transporte']`).value = portes_gastos;
        const porcentaje = document.querySelector(`input[name='porcentaje_dolar'`).value;
        let ecuacion = 0;
        console.log(api_dolar)
        console.log(porcentaje)
        console.log(Number(api_dolar))
        console.log(Number(porcentaje))
        ecuacion = (Number(api_dolar) * Number(porcentaje))/100;
        console.log(ecuacion)
        let dolar_rke = Number(api_dolar) + ecuacion;
        document.querySelector(`input[name='dolar_rke']`).value = dolar_rke.toFixed(2);
      }
    </script>
    
@endsection

