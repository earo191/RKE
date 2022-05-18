<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                &nbsp
                <a href="{{url('rifas/crear/new')}}" title="Crear Rifas"><span class="badge badge-primary"><i class="fas fa-plus-square fa-2x"></i></span></span></a>
                &nbsp 
                <h5 class="card-title">Crear Nueva Rifa</h5>
               &nbsp 
               @if(Session::has('mensaje'))
                   <div class="alert alert-alert-info justify-content-start text-start" role="alert">
                              {!!Session::get('mensaje')!!}
                    </div>
                    
               @endif

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                     <table id="example1" class="table table-bordered table-striped" style="width:100%">
                         <thead>
                      
                          <tr>
                               

                               <th>ID</th> 
                               <th>Descripción</th>
                               <th>Premio</th>
                               <th>Fecha Solteo</th>
                              <!-- <th>T/Cuenta</th>-->
                               <th>Valor</th>
                               <th>Loteria</th>
                               <th>Hora</th>
                          </tr>
                     
                         </thead>
                         <tbody>
                          @foreach($rifas as $rifa)
                                <tr>
                                   <th>{{$rifa->id_rifa}}</th> 
                                   <th>{{$rifa->Descripción_rifa}}</th>
                                   <td>{{$rifa->premio}}</td>

                                   <td>{{$rifa->fecha_solteo}}</td>
                                   <td>
                                    {{$rifa->valor_tikek}}
                                    
                                   </td>
                                   <td>{{$rifa->loteria}}</td>
                                    <td>{{$rifa->hora}}</td>
                                </tr>
                              @endforeach          

                         </tbody>
                     </table>
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
            <!--  <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                      <h5 class="description-header">$35,210.43</h5>
                      <span class="description-text">TOTAL REVENUE</span>
                    </div>
                     /.description-block -->
                 <!-- </div>-->
                  <!-- /.col -->
                <!--  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                      <h5 class="description-header">$10,390.90</h5>
                      <span class="description-text">TOTAL COST</span>
                    </div>
                     /.description-block -->
                <!--  </div>
                   /.col -->
                <!--  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                      <h5 class="description-header">$24,813.53</h5>
                      <span class="description-text">TOTAL PROFIT</span>
                    </div>
                     /.description-block -->
                <!--  </div>
                  /.col -->
                <!--  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                      <h5 class="description-header">1200</h5>
                      <span class="description-text">GOAL COMPLETIONS</span>
                    </div>
                     /.description-block -->
                <!--  </div>
                </div>
                 /.row -->
             <!-- </div>-->
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>