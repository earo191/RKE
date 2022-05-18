<div class="row">

    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <a href="{{ url('/modulos/admin/tasa/index') }}" title="Tasa de cambio">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dollar-sign"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">1 Dolar </span>
                    <span class="info-box-number">
                        <div id="texto"></div>
                        <small></small>
                      </span>
                </div>
                
            </div>
        </a>
    </div>
    <!-- /.col -->

    <div class="col-12 col-sm-6 col-md-3">
        <a href="{{ url('/usuario') }}" title="Clientes Afiliados">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Usuarios</span>
                    <span class="info-box-number">total</span>
                </div>
            </div>
        </a>
    </div>

    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <a href="{{ url('pagos/rifas/procesar') }}" title="Notificaciones de Pago">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Trivias</span>
                    <span class="info-box-number">cantidad</span>
                </div>
            </div>
        </a>
    </div>

    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Tickest</span>
                <span class="info-box-number"><a title="disponibles" href="#"> ejemplo </a> / <a href="#"
                        title="vendidos"> dasdasd </a></span>
            </div>
        </div>
    </div>
    <!-- /.col -->

</div>
