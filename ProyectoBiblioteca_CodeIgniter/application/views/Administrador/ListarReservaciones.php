<div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>préstamos y reservaciones</small></h1>
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li><a href="<?= base_url()?>Administrador/ListarPrestamos">Todos los préstamos</a></li>
                <li><a href="<?= base_url()?>Administrador/ListarDevolucionesPendientes">Devoluciones pendientes</a></li>
                <li class="active"><a>Reservaciones</a></li>
            </ul>
        </div>
         <div class="container-fluid" style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="<?= base_url()?>assets/img/calendar.png" alt="clock" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a esta sección, aquí se muestran las reservaciones de libros hechas por los docentes y estudiantes, las cuales están pendientes para ser aprobadas por ti
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <h2 class="text-center all-tittles">Listado de reservaciones</h2>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">
                        <div class="div-table-cell" style="width: 6%;">#</div>
                        <div class="div-table-cell" style="width: 22%;">Nombre de libro</div>
                        <div class="div-table-cell" style="width: 22%;">Nombre de usuario</div>
                        <div class="div-table-cell" style="width: 10%;">Tipo</div>
                        <div class="div-table-cell" style="width: 10%;">F. Solicitud</div>
                        <div class="div-table-cell" style="width: 10%;">F. Entrega</div>
                        <div class="div-table-cell" style="width: 8%;">Aprobar</div>
                        <div class="div-table-cell" style="width: 8%;">Eliminar</div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list">
                        <div class="div-table-cell" style="width: 6%;">#</div>
                        <div class="div-table-cell" style="width: 22%;">Nombre de libro</div>
                        <div class="div-table-cell" style="width: 22%;">Nombre de usuario</div>
                        <div class="div-table-cell" style="width: 10%;">Tipo</div>
                        <div class="div-table-cell" style="width: 10%;">F. Solicitud</div>
                        <div class="div-table-cell" style="width: 10%;">F. Entrega</div>
                        <div class="div-table-cell" style="width: 8%;">
                            <button class="btn btn-success"><i class="zmdi zmdi-timer"></i></button>
                        </div>
                        <div class="div-table-cell" style="width: 8%;">
                            <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list">
                        <div class="div-table-cell" style="width: 6%;">#</div>
                        <div class="div-table-cell" style="width: 22%;">Nombre de libro</div>
                        <div class="div-table-cell" style="width: 22%;">Nombre de usuario</div>
                        <div class="div-table-cell" style="width: 10%;">Tipo</div>
                        <div class="div-table-cell" style="width: 10%;">F. Solicitud</div>
                        <div class="div-table-cell" style="width: 10%;">F. Entrega</div>
                        <div class="div-table-cell" style="width: 8%;">
                            <button class="btn btn-success"><i class="zmdi zmdi-timer"></i></button>
                        </div>
                        <div class="div-table-cell" style="width: 8%;">
                            <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list">
                        <div class="div-table-cell" style="width: 6%;">#</div>
                        <div class="div-table-cell" style="width: 22%;">Nombre de libro</div>
                        <div class="div-table-cell" style="width: 22%;">Nombre de usuario</div>
                        <div class="div-table-cell" style="width: 10%;">Tipo</div>
                        <div class="div-table-cell" style="width: 10%;">F. Solicitud</div>
                        <div class="div-table-cell" style="width: 10%;">F. Entrega</div>
                        <div class="div-table-cell" style="width: 8%;">
                            <button class="btn btn-success"><i class="zmdi zmdi-timer"></i></button>
                        </div>
                        <div class="div-table-cell" style="width: 8%;">
                            <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list">
                        <div class="div-table-cell" style="width: 6%;">#</div>
                        <div class="div-table-cell" style="width: 22%;">Nombre de libro</div>
                        <div class="div-table-cell" style="width: 22%;">Nombre de usuario</div>
                        <div class="div-table-cell" style="width: 10%;">Tipo</div>
                        <div class="div-table-cell" style="width: 10%;">F. Solicitud</div>
                        <div class="div-table-cell" style="width: 10%;">F. Entrega</div>
                        <div class="div-table-cell" style="width: 8%;">
                            <button class="btn btn-success"><i class="zmdi zmdi-timer"></i></button>
                        </div>
                        <div class="div-table-cell" style="width: 8%;">
                            <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <div class="div-table" style="margin:0 !important;">
                    <div class="div-table-row div-table-row-list">
                        <div class="div-table-cell" style="width: 6%;">#</div>
                        <div class="div-table-cell" style="width: 22%;">Nombre de libro</div>
                        <div class="div-table-cell" style="width: 22%;">Nombre de usuario</div>
                        <div class="div-table-cell" style="width: 10%;">Tipo</div>
                        <div class="div-table-cell" style="width: 10%;">F. Solicitud</div>
                        <div class="div-table-cell" style="width: 10%;">F. Entrega</div>
                        <div class="div-table-cell" style="width: 8%;">
                            <button class="btn btn-success"><i class="zmdi zmdi-timer"></i></button>
                        </div>
                        <div class="div-table-cell" style="width: 8%;">
                            <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>