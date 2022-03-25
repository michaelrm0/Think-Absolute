        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Administración Usuarios</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              	<li role="presentation"><a href="<?=base_url()?>Administrador/NuevoAdministrador">Administradores</a></li>
                <li role="presentation"><a href="<?=base_url()?>Administrador/NuevoBibliotecario">Bibliotecario(a)</a></li>
                <li role="presentation" class="active"><a>Docentes</a></li>
                <li role="presentation"><a href="<?=base_url()?>Administrador/NuevoEstudiante">Estudiantes</a></li> 
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="<?=base_url()?>assets/img/user02.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección donde se encuentra el listado de docentes registrados en el sistema, puedes actualizar algunos datos de los docentes o eliminar el registro completo del docente siempre y cuando no tenga préstamos asociados.
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="<?=base_url()?>Administrador/NuevoDocente">Nuevo Docente</a></li>
                        <li class="active">Listado de Docentes</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <h2 class="text-center all-tittles">Lista de docentes activos</h2>          
              <table id="tbldoce" class="table table-bordered table-striped">
                <thead class="div-table-head">
                <tr>
                  <th>Nombre y Apellido</th>                  
                  <th>Ver</th>
                  <th>Modificar</th>
                  <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>     
                    <?php if(!empty($docentes)):?>
                    <?php foreach ($docentes as $do) :?>           
                    <tr>
                       <td><?= $do->NombPer." ".$do->ApePer ?></td> 
                       <td>
                           <center>
                                <div class="btn-group">                     
                                <a onclick="recogerDatos(
                                '<?= $do->NombPer ?>',
                                '<?= $do->ApePer ?>',
                                '<?= $do->DescSex ?>',
                                '<?= $do->CorPer ?>',
                                '<?= $do->DniPer ?>',
                                '<?= $do->TelPer ?>',
                                '<?= $do->Usuario ?>',
                                '<?= $do->Clave ?>')" class="btn btn-info" data-toggle="modal" data-target="#verdoc">
                                <span class="glyphicon glyphicon-search"></span>
                                </a>
                                </div>                                     
                            </center>
                        </td>       
                        <td>                            
                            <center>
                                <div class="btn-group">
                                <a onclick="modificarDatos(
                                '<?= $do->NombPer ?>',
                                '<?= $do->ApePer ?>',
                                '<?= $do->DescSex ?>',
                                '<?= $do->CorPer ?>',
                                '<?= $do->DniPer ?>')" class="btn btn-warning" data-toggle="modal" data-target="#moddoc">
                                <span class="fa fa-pencil"></span>
                                </a>
                                </div>      
                            </center>
                        </td>       
                        <td>
                            <center>
                                <form method="post" action="<?= base_url(); ?>Administrador/DesactivarDocente">
                                    <input type="hidden" name="txtcodusu" value="<?= $do->CodUsu ?>">
                                    <input type="hidden" name="txtcodper" value="<?= $do->CodPer ?>">                    
                                    <input type="hidden" name="txtcoddoc" value="<?= $do->CodDoc ?>">
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-danger">
                                            <span class="fa fa-remove"></span>
                                        </button>
                                    </div>                                 
                                </form>
                            </center>
                        </td>                      
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
              </table>
          </div>
          <div class="modal fade" id="verdoc">       
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-aqua-active">
                        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>-->
                        <h4 class="modal-title">Datos del Administrador</h4>
                    </div>                
                    <div class="modal-body">
                        <div class="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box-body">  
                                        <div class="form-group"> 
                                            <h5 class="box-title">Nombres</h5>
                                            <input disabled="" class="form-control" type="text" name="txtnombres" id="noma">
                                            <h5 class="box-title">Apellidos</h5>
                                            <input disabled="" class="form-control" type="text" name="txtapellidos" id="apea">
                                            <h5 class="box-title">Sexo</h5>
                                            <input disabled="" class="form-control" type="text" name="txtsexo" id="sexa">
                                            <h5 class="box-title">Correo</h5>
                                            <input disabled="" class="form-control" type="text" name="txtcorreo" id="cora">
                                            <h5 class="box-title">DNI</h5>
                                            <input disabled="" class="form-control" type="text" name="txtcorreo" id="dnia"> 
                                            <h5 class="box-title">Teléfono</h5>
                                            <input disabled="" class="form-control" type="text" name="txttelefono" id="tela">
                                            <h5 class="box-title">Usuario</h5>
                                            <input disabled="" class="form-control" type="text" name="txtusuario" id="usua">
                                            <h5 class="box-title">Contraseña</h5>
                                            <input disabled="" class="form-control" type="text" name="txtclave" id="cona">  
                                        </div>
                                    </div>                               
                                </div>                        
                            </div>                    
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Aceptar</button>
                    </div>                
                </div>
            </div>        
        </div>

        <form method="post" action="<?php echo base_url() ?>Administrador/ModificarDocente">
            <!--<input type="hidden" name="txtcodusu" value="<?= $ad->CodUsu ?>">-->
            <input type="hidden" name="txtcodper" value="">                 
            <input type="hidden" name="txtcodad" value="">
            <div class="modal fade" id="moddoc">       
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-purple-active">
                            <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>-->
                            <h4 class="modal-title">Modificar Datos del Administrador</h4>
                        </div>                
                        <div class="modal-body">
                            <div class="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box-body">             
                                            <div class="form-group"> 
                                                <br>
                                                <div class="group-material">
                                                    <input type="text" name="txtnombres" id="nomm" class="material-control tooltips-general" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,80}" maxlength="80" data-toggle="tooltip" required="" data-placement="top" title="Escribe los nombres del Administrador, solamente letras">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Nombres</label>
                                                </div>                                
                                                <!--<h5 class="box-title">Nombres</h5>
                                                <input class="form-control" type="text" name="txtnombres" id="nomm">-->
                                                <div class="group-material">
                                                    <input type="text" name="txtapellidos" id="apem" class="material-control tooltips-general" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,80}" maxlength="80" data-toggle="tooltip" required="" data-placement="top" title="Escribe los apellidos del Administrador, solamente letras">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Apellidos</label>
                                                </div>
                                                <!--<h5 class="box-title">Apellidos</h5>
                                                <input class="form-control" type="text" name="txtapellidos" id="apem">-->
                                                <div class="group-material">
                                                <h5 class="box-title">Sexo</h5>
                                                <!--<input  class="form-control" type="text" name="txtsexo">-->
                                                <select name="cbosexo" class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige el tipo de sexo del administrador">
                                                    <option value="" disabled="" selected="">Seleccione una sexo</option>          
                                                    <option value="1">Masculino</option>
                                                    <option value="2">Femenino</option>
                                                    <option value="3">Indeterminado</option>
                                                </select>                   
                                                </div>                   
                                                <div class="group-material">
                                                    <input type="email" name="txtcorreo" id="corm" class="material-control tooltips-general" maxlength="50" data-toggle="tooltip" required="" data-placement="top" title="Escribe el Correo del administrador">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Correo Eléctronico</label>
                                                </div>
                                                <!--<h5 class="box-title">Correo</h5>
                                                <input class="form-control" type="text" name="txtcorreo" id="corm">-->
                                                <div class="group-material">
                                                    <input type="text" name="txtdni" id="dnim" class="material-control tooltips-general"pattern="[0-9-]{1,10}" maxlength="8" data-toggle="tooltip" required="" data-placement="top" title="Solamente números, 8 dígitos">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Número de DNI</label>
                                                </div>
                                                <!--<h5 class="box-title">DNI</h5>
                                                <input class="material-control tooltips-general" pattern="[0-9-]{1,10}" required="" maxlength="8" title="Solamente números, 8 dígitos" type="text" name="txtdni" id="dnim"> -->
                                                
                                                <h5 class="box-title">Biblioteca a Cargo</h5>
                                                <select name="cbobibli" class="material-control tooltips-general" data-toggle="tooltip" data-placement="top" title="Elige una biblioteca a cargo de este administrador">
                                                    <option value="" disabled="" selected="">Seleccione una biblioteca a cargo</option><?php if(!empty($bibliotecas)):?> 
                                                    <?php foreach ($bibliotecas as $bib) :?>
                                                    <option value="<?= $bib->CodBibli ?>"><?= $bib->NombBibli ?></option>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                                </select>
                                                
                                                <!--<input class="form-control" type="text" name="txtbibli" id="bibm">  -->
                                            </div>
                                        </div>                                  
                                    </div>                        
                                </div>                    
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark pull-left" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-dark">Actualizar Cambios</button>
                        </div>
                    </div>
                </div>        
            </div>
        </form>