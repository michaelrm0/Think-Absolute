        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Administración Usuarios</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation"><a href="<?=base_url()?>Administrador/NuevoAdministrador">Administradores</a></li>
                <li role="presentation"><a href="<?=base_url()?>Administrador/NuevoBibliotecario">Bibliotecario(a)</a></li>
                <li role="presentation"><a href="<?=base_url()?>Administrador/NuevoDocente">Docentes</a></li>
                <li role="presentation" class="active"><a>Estudiantes</a></li>    
            </ul>
        </div> 
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="<?=base_url()?>assets/img/user03.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar nuevos estudiantes, para poder registrar un estudiante deberás de llenar todos los campos del siguiente formulario
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo Estudiante</li>
                      <li><a href="<?=base_url()?>Administrador/ListarEstudiantes">Listado de Estudiantes</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar nuevo Estudiante</div>
                <form autocomplete="off" name="form" method="post" action="<?=base_url()?>Administrador/GuardarEstudiante">
                    <div style="margin: 0 auto;" class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="form-group <?php echo form_error("txtnombres") != false ? 'has-error':'';?>">
                                <label for="txtnombres">&nbsp;&nbsp;&nbsp;Nombres</label>
                                <input type="text" value="<?php echo set_value("txtnombres");?>" name="txtnombres" class="form-control tooltips-general" placeholder="Escribe aquí los nombres del Estudiante" maxlength="80" data-toggle="tooltip" data-placement="top" onpaste="return false" onkeypress="return soloLetras(event)">     
                                <?php echo form_error("txtnombres","<span class='help-block'>","</span>")?>
                            </div>
                            <div class="form-group <?php echo form_error("txtapellidos") != false ? 'has-error':'';?>">
                                <label>&nbsp;&nbsp;&nbsp;Apellidos</label>
                                <input type="text" value="<?php echo set_value("txtapellidos");?>" name="txtapellidos" class="form-control tooltips-general" placeholder="Escribe aquí los apellidos del Estudiante" maxlength="80" data-toggle="tooltip" data-placement="top" onpaste="return false" onkeypress="return soloLetras(event)">                              
                                <?php echo form_error("txtapellidos","<span class='help-block'>","</span>")?>
                            </div>
                            <div class="form-group <?php echo form_error("txtcor") != false ? 'has-error':'';?>">
                                <label>&nbsp;&nbsp;&nbsp;Correo Institucional</label>                     
                                <div class="input-group"> 
                                    <input type="hidden" name="txtcor"> 
                                    <input type="text" value="<?php echo set_value("txtcorreo");?>" name="txtcorreo" class="form-control tooltips-general" placeholder="Escribe aquí el correo institucional del Estudiante" maxlength="10" data-toggle="tooltip" data-placement="top" onpaste="return false" onkeypress="return soloNumeros(event)">
                                <div class="input-group-addon">
                                    @unfv.edu.pe
                                </div>
                                </div>                                  
                                <?php echo form_error("txtcor","<span class='help-block'>","</span>")?>
                            </div>
                            <div class="form-group <?php echo form_error("txtdni") != false ? 'has-error':'';?>">
                                <label>&nbsp;&nbsp;&nbsp;Número de DNI</label>
                                <input type="text" name="txtdni" value="<?php echo set_value("txtdni");?>" class="form-control tooltips-general" placeholder="Escribe aquí el número de DNI del Estudiante"  maxlength="8" data-toggle="tooltip" data-placement="top" onpaste="return false" onkeypress="return soloNumeros(event)">                         
                                <?php echo form_error("txtdni","<span class='help-block'>","</span>")?>
                            </div>
                            <div class="form-group <?php echo form_error("txtusuario") != false ? 'has-error':'';?>">
                                <label>&nbsp;&nbsp;&nbsp;Nombre de usuario</label>
                                <input type="text" value="<?php echo set_value("txtusuario");?>" name="txtusuario" class="form-control tooltips-general input-check-user" placeholder="Escribe aquí el usuario del Estudiante"  maxlength="50" data-toggle="tooltip" data-placement="top" onpaste="return false" onkeypress="return alfaNumerico(event)">
                                <?php echo form_error("txtusuario","<span class='help-block'>","</span>")?>
                            </div>                            
                            <div class="form-group <?php echo form_error("txtclave") != false ? 'has-error':'';?>">
                                <label>&nbsp;&nbsp;&nbsp;Contraseña</label>
                                <input type="password" value="<?php echo set_value("txtclave");// echo $this->session->userdata('s_acla')?>" name="txtclave" class="form-control tooltips-general" placeholder="Escribe aquí la contraseña del Estudiante" maxlength="20" onpaste="return false" onkeypress="return alfaNumerico(event)" data-toggle="tooltip" data-placement="top">
                                <?php echo form_error("txtclave","<span class='help-block'>","</span>")?>
                            </div>                            
                            <div class="form-group <?php echo form_error("cbosexo") != false ? 'has-error':'';?>">
                                <label>&nbsp;&nbsp;&nbsp;Sexo</label>
                                <select name="cbosexo" class="form-control tooltips-general" data-toggle="tooltip" data-placement="top">
                                    <option value="" disabled="" selected="">Seleccione el sexo del Estudiante</option>
                                    <?php if(!empty($sexo)):?>
                                    <?php foreach ($sexo as $sex) :?> 
                                    <option value="<?=$sex->CodSex?>" <?php echo set_select("cbosexo",$sex->CodSex);?>><?= $sex->DescSex?></option> 
                                    <?php endforeach; ?>
                                    <?php endif;?>
                                </select>                       
                                <?php echo form_error("cbosexo","<span class='help-block'>","</span>")?>   
                            </div>
                            <div class="form-group <?php echo form_error("cbofacu") != false ? 'has-error':'';?>">
                                <label>&nbsp;&nbsp;&nbsp;Facultad</label>
                                <select id="cbofac" name="cbofacu" class="form-control tooltips-general" data-toggle="tooltip" data-placement="top">
                                    <option value="" disabled="" selected="">Seleccione la facultad del Estudiante</option>
                                    <?php if(!empty($facultad)):?>
                                    <?php foreach ($facultad as $fac) :?>
                                    <option value="<?=$fac->CodFacu?>" <?php echo set_select("cbofacu",$fac->CodFacu);?>><?= $fac->NombFacu?></option> 
                                    <?php endforeach; ?>
                                    <?php endif;?>
                                </select>                       
                                <?php echo form_error("cbofacu","<span class='help-block'>","</span>")?>   
                            </div>  
                            <div class="form-group <?php echo form_error("cboescu") != false ? 'has-error':'';?>">
                                <label>&nbsp;&nbsp;&nbsp;Escuela</label>
                                <select id="cboesc" name="cboescu" class="form-control tooltips-general" data-toggle="tooltip" data-placement="top">
                                    <option value="" disabled="" selected="">Seleccione la escuela del Estudiante</option>
                                    <?php if(!empty($escuela)):?>
                                    <?php foreach ($escuela as $esc) :?>
                                    <option value="<?=$esc->CodEsc?>" <?php echo set_select("cboescu",$esc->CodEsc);?>><?= $esc->NombEsc?></option> 
                                    <?php endforeach; ?>
                                    <?php endif;?>
                                </select>                       
                                <?php echo form_error("cboescu","<span class='help-block'>","</span>")?>   
                            </div>                            
                            <p class="text-center">
                                
                                <button type="submit" onclick="correo()" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                       </div>
                    </div>
                </form>
            </div>
        </div>