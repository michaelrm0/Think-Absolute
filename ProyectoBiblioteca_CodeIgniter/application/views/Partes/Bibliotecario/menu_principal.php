<div class="visible-xs font-movile-menu mobile-menu-button"></div>
<div class="full-reset container-menu-movile custom-scroll-containers">
    <div class="logo full-reset all-tittles">
        <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
        sistema bibliotecario
    </div>
    <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
        <figure>
            <img src="<?= base_url() ?>assets/img/logo.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
        </figure>
        <p class="text-center" style="padding-top: 15px;">Sistema Bibliotecario</p>
    </div>        
    <div class="full-reset nav-lateral-list-menu">             
        <ul class="list-unstyled">  
            <li> 
                <div class="dropdown-menu-button">
                    <i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Sistema de Bibliotecas<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i>
                </div> 
                <ul class="list-unstyled">            
                    <a href="<?= base_url() ?>Logueado/cargarAdministrador"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio </a>         
                    <li>
                        <div class="dropdown-menu-button">
                            <i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Gestión de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i>
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url() ?>Administrador/NuevoAdministrador"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador(a)</a></li>
                            <li><a href="<?= base_url() ?>Administrador/NuevoBibliotecario"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Bibliotecario(a)</a></li>
                            <li><a href="<?= base_url() ?>Administrador/NuevoDocente"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo docente</a></li>
                            <li><a href="<?= base_url() ?>Administrador/NuevoEstudiante"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo estudiante</a></li>                   
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Categoría, Libro y Catálogo <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url() ?>Administrador/NuevaCategoria"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva categoría</a></li> 
                            <li><a href="<?= base_url() ?>Administrador/NuevoLibro"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo libro</a></li>
                            <li><a href="<?= base_url() ?>Administrador/Catalogo"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i>&nbsp;&nbsp; Préstamos y reservaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url() ?>Administrador/ListarPrestamos"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Todos los préstamos</a></li>
                            <li>
                                <a href="ListarDevolucionesPendientes"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i>&nbsp;&nbsp; Devoluciones pendientes <span class="label label-danger pull-right label-mhover">7</span></a>
                            </li>
                            <li> 
                                <a href="<?= base_url() ?>Administrador/ListarReservaciones"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>&nbsp;&nbsp; Reservaciones <span class="label label-danger pull-right label-mhover">7</span></a>
                            </li>
                        </ul>
                    </li>                    
                    <a href="<?= base_url() ?>Administrador/Reportes"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes y estadísticas</a>                    
                </ul>
            </li>                                     
        </ul>
    </div>
</div>
</div>
<div class="content-page-container full-reset custom-scroll-containers">
    <nav class="navbar-user-top full-reset">
        <ul class="list-unstyled full-reset">
            <figure>
                <img src="<?= base_url() ?>assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
            </figure>
            <li style="color:#fff; cursor:default;">
                <span class="all-tittles"><?php echo $this->session->userdata('s_nomcom') ?></span>
            </li>
            <li  class="tooltips-general exit-system-button" data-href="<?= base_url() ?>Logueado/desconectarAdministrador" data-placement="bottom" title="Salir del sistema">
                <i class="zmdi zmdi-power"></i>
            </li>
            <!--<li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar libro">
                <i class="zmdi zmdi-search"></i>
            </li>
            <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
            </li>-->
            <li class="mobile-menu-button visible-xs" style="float: left !important;">
                <i class="zmdi zmdi-menu"></i>
            </li>
        </ul>
    </nav>
    <!--<div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dignissimos qui molestias ipsum officiis unde aliquid consequatur, accusamus delectus asperiores sunt. Quibusdam veniam ipsa accusamus error. Animi mollitia corporis iusto.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
            </div>
        </div>
      </div>
    </div>-->