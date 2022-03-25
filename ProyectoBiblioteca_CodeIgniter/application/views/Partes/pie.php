        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Resumen del Curso</h4>
                        <p>
                            Hecho por estudiantes de la Universidad Nacional Federico Villareal en el curso de Ingeniería de Software I con la finalidad de mejorar el proceso del Sistema Bibliotecario plasmándolo en un aplicativo web.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">desarrolladores a cargo</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Giovanni Rojas <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Gersson Salazar <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">Copyright © 2019 Think Absolute. Todos los derechos reservados.</div>
        </footer>
    </div>
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="<?=base_url()?>js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?=base_url()?>js/modernizr.js"></script>    
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?=base_url()?>js/main.js"></script>
    <script src="<?=base_url()?>js/sweet-alert.min.js"></script>

    <!--Cargar scrollbar-->
    <script src="<?=base_url()?>plugins/pace/pace.min.js"></script>
    <!--Listar facultad y escuelas-->
    <script type="text/javascript">
        var  baseUrl="<?php echo base_url();?>";
    </script>
    <script src="<?=base_url()?>js/escuelas.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url()?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=base_url()?>dist/js/demo.js"></script>
    <!-- jQuery 3 -->
    <!--<script src="<?php //base_url()?>bower_components/jquery/dist/jquery.min.js"></script>--><!--Esto evita que el diseño se mueva-->
    <script src="<?=base_url()?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <!--DatePicker-->
    <!--<script src="https://code.jquery.com/jquery-2.0.0.min.js"></script>-->
    <script src="<?=base_url()?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript">    
        $(document).ready(function ()
        {
            $('#anio').datepicker({
                format: " yyyy",
                viewMode: "years", 
                minViewMode: "years"
            });  
        });
    </script>

    <script>
    $('#tbladmi').DataTable({
        "language": {
            "lengthMenu": "Mostrar  _MENU_  entrada",
            "zeroRecords": "No se encontraron resultados en su búsqueda",
            "info": "Mostrando registros de _START_ al _END_ de un total de _TOTAL_ Administradores",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar : ",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
    $('#tblbibl').DataTable({
        "language": {
            "lengthMenu": "Mostrar  _MENU_  entrada",
            "zeroRecords": "No se encontraron resultados en su búsqueda",
            "info": "Mostrando registros de _START_ al _END_ de un total de _TOTAL_ Bibliotecario(a)s",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar : ",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
    $('#tbldoce').DataTable({
        "language": {
            "lengthMenu": "Mostrar  _MENU_  entrada",
            "zeroRecords": "No se encontraron resultados en su búsqueda",
            "info": "Mostrando registros de _START_ al _END_ de un total de _TOTAL_ Docentes",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar : ",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
    $('#tblestu').DataTable({
        "language": {
            "lengthMenu": "Mostrar  _MENU_  entrada",
            "zeroRecords": "No se encontraron resultados en su búsqueda",
            "info": "Mostrando registros de _START_ al _END_ de un total de _TOTAL_ Estudiantes",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar : ",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
    $('#tblcat').DataTable({
        "language": {
            "lengthMenu": "Mostrar  _MENU_  entrada",
            "zeroRecords": "No se encontraron resultados en su búsqueda",
            "info": "Mostrando registros de _START_ al _END_ de un total de _TOTAL_ Categorías",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar : ",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
    </script>
    <script>
        recogerDatos = function (nom,ape,sex,cor,dni,tel,usu,con,bib) 
        {            
            $('#noma').val(nom);
            $('#apea').val(ape);
            $('#sexa').val(sex);
            $('#cora').val(cor);
            $('#dnia').val(dni);
            $('#tela').val(tel);
            $('#usua').val(usu);
            $('#cona').val(con);
            $('#biba').val(bib);
        };
        modificarDatos = function (nom,ape,sex,cor,dni,bib)
        {            
            $('#nomm').val(nom);
            $('#apem').val(ape);
            $('#sexm').val(sex);
            $('#corm').val(cor);
            $('#dnim').val(dni);            
            $('#bibm').val(bib);
        };

        modificarCategoria = function (cod,nom)
        {   
            $('#codc').val(cod);        
            $('#nomc').val(nom);
        };

        correo = function ()
        {
            correo = document.form.txtcorreo.value;
            nuevo = correo + "@unfv.edu.pe";
            document.form.txtcor.value = nuevo;
        }
    </script>  
    <script type="text/javascript">      
        function soloNumeros(e)
        {
            key = e.KeyCode || e.which;
            teclado = String.fromCharCode(key);
            numeros = "0123456789";
            especiales = "8-37-38-46";
            teclado_especial = false;

            for(var i in especiales)
            {
                if(key == especiales[i])
                {
                    teclado_especial = true;
                }
            }

            if(numeros.indexOf(teclado) == -1 && !teclado_especial)
            {
                return false;
            }
        }
        function soloLetras(e)
        {
            key = e.KeyCode || e.which;
            teclado = String.fromCharCode(key);
            letras = "abcdefghijklmnñopqrstuvwyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ "
            especiales = "8-37-38-46";
            teclado_especial = false;

            for(var i in especiales)
            {
                if(key == especiales[i])
                {
                    teclado_especial = true;
                }
            }

            if(letras.indexOf(teclado) == -1 && !teclado_especial)
            {
                return false;
            }
            
        }
        function alfaNumerico(e)
        {
            key = e.KeyCode || e.which;
            teclado = String.fromCharCode(key);
            letras = "0123456789abcdefghijklmnñopqrstuvwyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ"
            especiales = "8-37-38-46";
            teclado_especial = false;

            for(var i in especiales)
            {
                if(key == especiales[i])
                {
                    teclado_especial = true;
                }
            }

            if(letras.indexOf(teclado) == -1 && !teclado_especial)
            {
                return false;
            }
            
        }
        function alfaNumerico2(e)
        {
            key = e.KeyCode || e.which;
            teclado = String.fromCharCode(key);
            letras = "0123456789abcdefghijklmnñopqrstuvwyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ- "
            especiales = "8-37-38-46";
            teclado_especial = false;

            for(var i in especiales)
            {
                if(key == especiales[i])
                {
                    teclado_especial = true;
                }
            }

            if(letras.indexOf(teclado) == -1 && !teclado_especial)
            {
                return false;
            }
            
        }
    </script>
</body>
</html>