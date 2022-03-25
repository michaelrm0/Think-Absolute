<div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Registrar Préstamo</small></h1>
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation" class="active"><a>Nuevo Préstamo</a></li>    
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="<?=base_url()?>assets/img/user03.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar un nuevo préstamo de libro, para poder registrar su préstamo deberás de llenar todos los campos del siguiente formulario
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar nuevo Préstamo</div>
                <form autocomplete="off" method="post" action="<?=base_url()?>Administrador/GuardarEstudiante">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="form-group <?php echo form_error("txtnombres") != false ? 'has-error':'';?>">
                                <label for="txtnombres">&nbsp;&nbsp;&nbsp;Nombres</label>
                                <input type="text" value="<?php echo set_value("txtnombres");?>" name="txtnombres" class="form-control tooltips-general" placeholder="Escribe aquí los nombres del Estudiante" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,80}"  maxlength="80" data-toggle="tooltip" data-placement="top" title="Escribe los nombres del Estudiante, solamente letras">     
                                <?php echo form_error("txtnombres","<span class='help-block'>","</span>")?>
                            </div>
                            <div class="form-group <?php echo form_error("txtapellidos") != false ? 'has-error':'';?>">
                                <label>&nbsp;&nbsp;&nbsp;Apellidos</label>
                                <input type="text" value="<?php echo set_value("txtapellidos");//echo $this->session->userdata('s_aape')?>" name="txtapellidos" class="form-control tooltips-general" placeholder="Escribe aquí los apellidos del Estudiante" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,80}" maxlength="80" data-toggle="tooltip" data-placement="top" title="Escribe los apellidos del Estudiante, solamente letras">                              
                                <?php echo form_error("txtapellidos","<span class='help-block'>","</span>")?>
                            </div>
                            <div class="form-group <?php echo form_error("txtdni") != false ? 'has-error':'';?>">
                                <label>&nbsp;&nbsp;&nbsp;Número de DNI</label>
                                <input type="text" name="txtdni" value="<?php echo set_value("txtdni");// echo $this->session->userdata('s_adni')?>" class="form-control tooltips-general" placeholder="Escribe aquí el número de DNI del Estudiante" pattern="[0-9-]{1,10}"  maxlength="8" data-toggle="tooltip" data-placement="top" title="Solamente números, 8 dígitos">                         
                                <?php echo form_error("txtdni","<span class='help-block'>","</span>")?>
                            </div>
                            <div class="form-group">
                                <label>&nbsp;&nbsp;&nbsp;Libro</label>
                                <input type="text" name="txtlibro" value="" class="form-control tooltips-general" placeholder="Libro Elegido" data-toggle="tooltip" data-placement="top" title="Libro Elegido">                         
                            </div>
                           <div class="form-group">
                                <label>&nbsp;&nbsp;&nbsp;Fecha de Préstamo</label>
                                <input type="date" name="txtfecpre" value="" class="form-control tooltips-general" placeholder="Fecha de Préstamo" data-toggle="tooltip" data-placement="top" title="Fecha de Préstamo">                         
                            </div>
                           <div class="form-group">
                                <label>&nbsp;&nbsp;&nbsp;Fecha de Devolución</label>
                                <input type="date" name="txtfecdev" value="" class="form-control tooltips-general" placeholder="Fecha de Devolución" data-toggle="tooltip" data-placement="top" title="La de fecha de devolución no debe execeder a 3 dias a la de Préstamo">                         
                            </div>
                            <div class="form-group <?php echo form_error("cbofacu") != false ? 'has-error':'';?>">
                                <label>&nbsp;&nbsp;&nbsp;Facultad</label>
                                <select id="cbofac" name="cbofacu" class="form-control tooltips-general" data-toggle="tooltip" data-placement="top"  title="Elige la facultad a la que pertence el Estudiante">
                                    <option value="" disabled="" selected="">Seleccione la facultad</option>
                                </select>                       
                                <?php echo form_error("cbofacu","<span class='help-block'>","</span>")?>   
                            </div>                            
                            <p class="text-center">                              
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Registrar Préstamo</button>
                            </p> 
                       </div>
                    </div>
                </form>
            </div>
        </div>