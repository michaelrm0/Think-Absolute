
<div class="container">
    <div class="page-header">
        <h1 class="all-tittles">Sistema bibliotecario <small>Añadir Categoría</small></h1>
    </div>
</div>

<div class="container-fluid"  style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="<?=base_url()?>assets/img/category.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección para registrar nuevas categorías de libros, debes de llenar el siguiente formulario para registrar una categoría
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
                <li class="active">Nueva categoría</li>
                <li><a href="<?=base_url()?>Administrador/ListaCategoria">Listado de categorías</a></li>
            </ol>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-blue">Agregar una nueva categoría</div>
        <form autocomplete="off" method="post" action="<?=base_url()?>Administrador/GuardarCategoria">
            <div style="margin: 0 auto;"class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="form-group <?php echo form_error("txtcategoria") != false ? 'has-error':'';?>">
                        <label for="txtcategoria">&nbsp;&nbsp;&nbsp;Nombre</label>
                        <input type="text" value="<?php echo set_value("txtcategoria");?>" name="txtcategoria" class="form-control tooltips-general" placeholder="Escribe aquí el nombre de la categoría" onpaste="return false" onkeypress="return alfaNumerico2(event)" maxlength="50" data-toggle="tooltip" data-placement="top">               
                        <?php echo form_error("txtcategoria","<span class='help-block'>","</span>")?>
                    </div>
                    <!--<div class="group-material">
                        <input name="txtcategoria" type="text" class="material-control tooltips-general" placeholder="Escribe aquí el nombre de la categoría" required="" pattern="[A-ZÁÉÍÓÚÑ -]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la categoría en mayúsculas">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Nombre</label>
                    </div>-->
                    <p class="text-center">
                        <!--<button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>-->
                        <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                    </p> 
                </div>
            </div>
        </form>
    </div>
</div>
