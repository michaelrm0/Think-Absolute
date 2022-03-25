<div class="container">
    <div class="page-header">
        <h1 class="all-tittles">Sistema bibliotecario <small>Añadir libro</small></h1>
    </div>
</div>
<div class="container-fluid"  style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="<?=base_url()?>assets/img/flat-book.png" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección para agregar nuevos libros a la biblioteca, deberas de llenar todos los campos para poder registrar el libro
        </div>
    </div>
</div>
<div class="container-fluid">
    <form autocomplete="off" method="post" action="<?=base_url()?>Administrador/GuardarLibro">
        <div class="container-flat-form">
            <div class="title-flat-form title-flat-blue">Nuevo libro</div>
            <div style="margin: 0 auto;" class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <legend><strong>Información básica</strong></legend><br>
                    <div class="form-group <?php echo form_error("cbocategoria") != false ? 'has-error':'';?>">
                        <label>&nbsp;&nbsp;&nbsp;Categoría</label>
                            <select name="cbocategoria" class="form-control tooltips-general" data-toggle="tooltip" data-placement="top">
                            <option value="" disabled="" selected="">Seleccione la categoría del Libro</option>
                            <?php if(!empty($categorias)):?>
                                <?php foreach ($categorias as $cat) : ?>
                                    <option value="<?=$cat->CodCat?>" <?php echo set_select("cbocategoria",$cat->CodCat);?>><?= $cat->DescCat?></option> 
                                <?php endforeach; ?>
                            <?php endif;?>
                            </select>                        
                        <?php echo form_error("cbocategoria","<span class='help-block'>","</span>")?>           
                    </div>  
                    <div class="form-group <?php echo form_error("txtisbn") != false ? 'has-error':'';?>">
                        <label>&nbsp;&nbsp;&nbsp;ISBN</label>
                        <input type="text" name="txtisbn" value="<?php echo set_value("txtisbn");?>" class="form-control tooltips-general" placeholder="Escribe aquí el código correlativo del Libro" onpaste="return false" onkeypress="return soloNumeros(event)"maxlength="20" data-toggle="tooltip" data-placement="top">
                        <?php echo form_error("txtisbn","<span class='help-block'>","</span>")?>
                    </div>                             
                    <div class="form-group <?php echo form_error("txttitulo") != false ? 'has-error':'';?>">
                        <label>&nbsp;&nbsp;&nbsp;Título</label>
                        <input type="text" value="<?php echo set_value("txttitulo");// echo $this->session->userdata('s_ausu')?>" name="txttitulo" class="form-control tooltips-general input-check-user" placeholder="Escribe aquí el título o nombre del Libro" onpaste="return false" onkeypress="return alfaNumerico2(event)" maxlength="70" data-toggle="tooltip" data-placement="top">
                        <?php echo form_error("txttitulo","<span class='help-block'>","</span>")?>
                    </div>              
                    <div class="form-group <?php echo form_error("txtautor") != false ? 'has-error':'';?>">
                        <label>&nbsp;&nbsp;&nbsp;Autor</label>
                        <input type="text" value="<?php echo set_value("txtautor");?>" name="txtautor" class="form-control tooltips-general" placeholder="Escribe aquí el autor del Libro" onpaste="return false" onkeypress="return soloLetras(event)" maxlength="70" data-toggle="tooltip" data-placement="top">
                        <?php echo form_error("txtautor","<span class='help-block'>","</span>")?>
                    </div>
                    <div class="form-group <?php echo form_error("cbopais") != false ? 'has-error':'';?>">
                        <label>&nbsp;&nbsp;&nbsp;País</label>
                            <select name="cbopais" class="form-control tooltips-general" data-toggle="tooltip" data-placement="top">
                            <option value="" disabled="" selected="">Seleccione el país del Libro </option>
                            <?php if(!empty($paises)):?>
                                <?php foreach ($paises as $pa) : ?>
                                    <option value="<?=$pa->CodPais?>" <?php echo set_select("cbopais",$pa->CodPais);?>><?= $pa->NombPais?></option> 
                                <?php endforeach; ?>
                            <?php endif;?>
                            </select>                        
                        <?php echo form_error("cbopais","<span class='help-block'>","</span>")?>           
                    </div><br> 
                    <legend><strong>Otros datos</strong></legend><br>
                    <div class="form-group <?php echo form_error("txtanio") != false ? 'has-error':'';?>">
                        <label>&nbsp;&nbsp;&nbsp;Año</label>
                        <input type="text" id="anio" name="txtanio" value="<?php echo set_value("txtanio");?>" class="form-control tooltips-general" placeholder="Escribe aquí el año de publicación del Libro" onpaste="return false" onkeypress="return soloNumeros(event)"maxlength="4" data-toggle="tooltip" data-placement="top">
                        <?php echo form_error("txtanio","<span class='help-block'>","</span>")?>
                    </div>  
                    <div class="form-group <?php echo form_error("txteditorial") != false ? 'has-error':'';?>">
                        <label>&nbsp;&nbsp;&nbsp;Editorial</label>
                        <input type="text" value="<?php echo set_value("txteditorial");// echo $this->session->userdata('s_ausu')?>" name="txteditorial" class="form-control tooltips-general input-check-user" placeholder="Escribe aquí la editorial del Libro" onpaste="return false" onkeypress="return alfaNumerico2(event)" maxlength="70" data-toggle="tooltip" data-placement="top">
                        <?php echo form_error("txteditorial","<span class='help-block'>","</span>")?>
                    </div>  
                    <div class="form-group <?php echo form_error("txtejemplares") != false ? 'has-error':'';?>">
                        <label>&nbsp;&nbsp;&nbsp;Ejemplares</label>
                        <input type="text" name="txtejemplares" value="<?php echo set_value("txtejemplares");?>" class="form-control tooltips-general" placeholder="Escribe aquí la cantidad de libros que registrarás" onpaste="return false" onkeypress="return soloNumeros(event)"maxlength="3" data-toggle="tooltip" data-placement="top">
                        <?php echo form_error("txtejemplares","<span class='help-block'>","</span>")?>
                    </div><br>                     
                    <legend><strong>Ubicación</strong></legend><br>
                    <div class="form-group <?php echo form_error("txtubicacion") != false ? 'has-error':'';?>">
                        <label>&nbsp;&nbsp;&nbsp;Ubicación en el estante</label>
                        <input type="text" value="<?php echo set_value("txtubicacion");// echo $this->session->userdata('s_ausu')?>" name="txtubicacion" class="form-control tooltips-general input-check-user" placeholder="Escribe aquí la ubicación del Libro" onpaste="return false" onkeypress="return alfaNumerico2(event)" maxlength="50" data-toggle="tooltip" data-placement="top">
                        <?php echo form_error("txtubicacion","<span class='help-block'>","</span>")?>
                    </div>  
                    <div class="group-material">
                        <input name="txtcodbibli" type="hidden" value="<?php echo $this->session->userdata('s_codBibli')?>" class="material-control tooltips-general">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </div>
                    <p class="text-center">
                        <!--<button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>-->
                        <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                    </p>
                </div>
            </div>
        </div>
    </form>
</div>

