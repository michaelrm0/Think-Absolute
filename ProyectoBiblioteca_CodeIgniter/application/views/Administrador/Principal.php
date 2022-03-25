        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Inicio</small></h1>
            </div>
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">
            <article class="tile">
                <a style="text-decoration: none; color:rgb(99,98,99)" href="<?=base_url()?>Administrador/ListarAdministradores">
                    <div class="tile-icon full-reset"><i class="zmdi zmdi-face"></i></div>
                    <div class="tile-name all-tittles">administradores</div>
                    <div class="tile-num full-reset"><?php echo $this->session->userdata('s_contad') ?></div>
                </a>
            </article>
            <article class="tile">
                <a style="text-decoration: none; color:rgb(99,98,99)" href="<?=base_url()?>Administrador/ListarBibliotecarios">
                    <div class="tile-icon full-reset"><i class="zmdi zmdi-male-female"></i></div>
                    <div class="tile-name all-tittles" style="width: 90%;">bibliotecario(a)s</div>
                    <div class="tile-num full-reset"><?php echo $this->session->userdata('s_contbi') ?></div>
                </a>
            </article>
            <article class="tile">
                <a style="text-decoration: none; color:rgb(99,98,99)" href="<?=base_url()?>Administrador/ListarDocentes">
                    <div class="tile-icon full-reset"><i class="zmdi zmdi-male-alt"></i></div>
                    <div class="tile-name all-tittles">docentes</div>
                    <div class="tile-num full-reset"><?php echo $this->session->userdata('s_contdo') ?></div>
                </a>
            </article>
            <article class="tile">
                <a style="text-decoration: none; color:rgb(99,98,99)" href="<?=base_url()?>Administrador/ListarEstudiantes">
                    <div class="tile-icon full-reset"><i class="zmdi zmdi-accounts"></i></div>
                    <div class="tile-name all-tittles">estudiantes</div>
                    <div class="tile-num full-reset"><?php echo $this->session->userdata('s_contes') ?></div>
                </a>
            </article>   
            <article class="tile">
                <a style="text-decoration: none; color:rgb(99,98,99)" href="<?=base_url()?>Administrador/ListaCategoria">
                    <div class="tile-icon full-reset"><i class="zmdi zmdi-bookmark-outline"></i></div>
                    <div class="tile-name all-tittles">categorías</div>
                    <div class="tile-num full-reset"><?php echo $this->session->userdata('s_contcat') ?></div>
                </a>
            </article>            
            <article class="tile">
                <a style="text-decoration: none; color:rgb(99,98,99);" href="<?=base_url()?>Administrador/Catalogo">
                    <div class="tile-icon full-reset"><i class="zmdi zmdi-book"></i></div>
                    <div class="tile-name all-tittles">libros</div>
                    <div class="tile-num full-reset"><?php echo $this->session->userdata('s_contlib') ?></div>
                </a>
            </article>  
            <article class="tile">
                <a style="text-decoration: none; color:rgb(99,98,99)" href="<?=base_url()?>Administrador/ListarPrestamos">
                    <div class="tile-icon full-reset"><i class="zmdi zmdi-calendar"></i></div>
                    <div class="tile-name all-tittles">préstamos</div>
                    <div class="tile-num full-reset">7</div>
                </a>
            </article>  
            <article class="tile">
                <a style="text-decoration: none; color:rgb(99,98,99)" href="<?=base_url()?>Administrador/ListarDevolucionesPendientes">
                    <div class="tile-icon full-reset"><i class="zmdi zmdi-time-restore"></i></div>
                    <div class="tile-name all-tittles" style="width: 90%;">devoluciones pendientes</div>
                    <div class="tile-num full-reset">9</div>
                </a>
            </article> 
            <article class="tile">
                <a style="text-decoration: none; color:rgb(99,98,99)" href="<?=base_url()?>Administrador/ListarReservaciones">
                    <div class="tile-icon full-reset"><i class="zmdi zmdi-timer"></i></div>
                    <div class="tile-name all-tittles">reservaciones</div>
                    <div class="tile-num full-reset">10</div>
                </a>
            </article>                       
            <article class="tile">
                <a style="text-decoration: none; color:rgb(99,98,99)" href="<?=base_url()?>Administrador/Reportes">
                    <div class="tile-icon full-reset"><i class="zmdi zmdi-trending-up"></i></div>
                    <div class="tile-name all-tittles" style="width: 90%;">reportes y estadísticas</div>
                    <div class="tile-num full-reset">&nbsp;</div>
                </a>
            </article>
        </section>
        