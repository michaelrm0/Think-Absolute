<div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Reportes y estadísticas</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#statistics" aria-controls="statistics" role="tab" data-toggle="tab">Estadísticas</a></li>               
                <li role="presentation"><a href="#reports" aria-controls="reports" role="tab" data-toggle="tab">Reportes y fichas</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="statistics">
                    <div class="container-fluid"  style="margin: 50px 0;">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <img src="<?= base_url()?>assets/img/chart.png" alt="chart" class="img-responsive center-box" style="max-width: 120px;">
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                                Bienvenido al área de estadísticas, aquí puedes ver las diferentes estadísticas de los préstamos y libros.
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="page-header">
                          <h2 class="all-tittles">préstamos <small>en general</small></h2>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="text-center all-tittles">total préstamos del año 2016</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead>
                                            <tr class="success">
                                                <th class="text-center">Tipo usuario</th>
                                                <th class="text-center">N. Préstamos</th>
                                                <th class="text-center">Porcentaje</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Estudiantes</td>
                                                <td>0</td>
                                                <td>0%</td>
                                            </tr>
                                            <tr>
                                                <td>Docentes</td>
                                                <td>0</td>
                                                <td>0%</td>
                                            </tr>
                                            <tr>
                                                <td>Personal administrativo</td>
                                                <td>0</td>
                                                <td>0%</td>
                                            </tr>
                                            <tr>
                                                <td>Visitantes</td>
                                                <td>0</td>
                                                <td>0%</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="info">
                                                <th class="text-center">Total</th>
                                                <th class="text-center">0</th>
                                                <th class="text-center">0%</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <p class="lead text-center"><strong><i class="zmdi zmdi-info-outline"></i>&nbsp; ¡Importante!</strong> Para imprimir esta tabla ve a la sección de reportes y selecciona “Préstamos entregados (por usuarios)”</p>
                            </div>
                        </div>
                        <div class="page-header">
                          <h2 class="all-tittles">préstamos <small>por sección</small></h2>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="text-center all-tittles">préstamos de estudiantes por sección año 2016</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead>
                                            <tr class="success">
                                                <th class="text-center">Sección</th>
                                                <th class="text-center">N. Préstamos</th>
                                                <th class="text-center">Porcentaje</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sección</td>
                                                <td>0</td>
                                                <td>0%</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="info">
                                                <th class="text-center">Total</th>
                                                <th class="text-center">0</th>
                                                <th class="text-center">0%</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <p class="lead text-center"><strong><i class="zmdi zmdi-info-outline"></i>&nbsp; ¡Importante!</strong> Para imprimir esta tabla ve a la sección de reportes y selecciona “Préstamos entregados (por sección)”</p>
                            </div>
                        </div>
                        <div class="page-header">
                          <h2 class="all-tittles">libros <small>por categorías</small></h2>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h3 class="text-center all-tittles">libros por categorías año 2016</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead>
                                            <tr class="success">
                                                <th class="text-center">Categoría</th>
                                                <th class="text-center">Código</th>
                                                <th class="text-center">Total libros</th>
                                                <th class="text-center">Porcentaje</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Nombre</td>
                                                <td>Código categoría</td>
                                                <td>0</td>
                                                <td>0%</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="info">
                                                <th class="text-center"></th>
                                                <th class="text-center">Total libros</th>
                                                <th class="text-center">0</th>
                                                <th class="text-center">0%</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <p class="lead text-center"><strong><i class="zmdi zmdi-info-outline"></i>&nbsp; ¡Importante!</strong> Para imprimir esta tabla ve a la sección de reportes y selecciona “Reporte Libros por Categoría”</p>
                            </div>
                        </div>
                    </div>
                </div>        
                
                <div role="tabpanel" class="tab-pane fade" id="reports">
                    <div class="container-fluid"  style="margin: 50px 0;">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <img src="<?= base_url()?>assets/img/pdf.png" alt="pdf" class="img-responsive center-box" style="max-width: 120px;">
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                                Bienvenido al área de reportes, aquí puedes generar fichas de préstamos de estudiantes,en formato pdf entre otros.
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="page-header">
                              <h2 class="all-tittles">fichas</h2>
                            </div><br>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-file-text zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Ficha estudiante</h3>
                                </div>
                            </div>
                        </div>
                                               
                        <div class="row">
                            <div class="page-header">
                                <h2 class="all-tittles">reportes <small>Préstamos</small></h2>
                            </div><br>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="full-reset report-content">
                                    <p class="text-center">
                                        <i class="zmdi zmdi-calendar-close zmdi-hc-5x"></i>
                                    </p>
                                    <h3 class="text-center">Préstamos Realizados</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
