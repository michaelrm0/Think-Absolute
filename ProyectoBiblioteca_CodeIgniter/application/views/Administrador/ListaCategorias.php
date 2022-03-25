<div class="container">
    <div class="page-header">
        <h1 class="all-tittles">Sistema bibliotecario <small>Administración Institución</small></h1>
    </div>
</div>
<div class="container-fluid"  style="margin: 50px 0;">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="<?=base_url()?>assets/img/category.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a la sección donde se encuentra el listado de las categorías de libros. Puedes modificar o eliminar los datos de la categoría siempre y cuando no tenga libros asociados.
        </div> 
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
                <li><a href="<?=base_url()?>Administrador/NuevaCategoria">Nueva categoría</a></li>
                <li class="active">Listado de categorías</li>
            </ol>
        </div>
    </div>
</div>   
<div class="container-fluid">
    <h2 class="text-center all-tittles">Lista de categorías activos</h2>         
    <table id="tblcat" class="table table-bordered table-striped">
    <thead class="div-table-head">
        <tr>
            <th>Categoria</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>     
        <?php foreach ($categorias as $cat) : ?>         
        <tr>
            <td><?=$cat->DescCat?></td>
            <td>
                <div class="btn-group">                     
                    <a onclick="modificarCategoria(
                        '<?= $cat->CodCat ?>',
                        '<?= $cat->DescCat ?>')" class="btn btn-warning" data-toggle="modal" data-target="#modadmi">
                    <span class="fa fa-pencil"></span>
                    </a>
                </div>  
            </td>       
            <td>     
                <div class="btn-group">
                    <a href="<?=base_url()?>Administrador/EliminarCategoria?idCategoria=<?=$cat->CodCat?>" class="btn btn-danger"><i class="zmdi zmdi-delete"></i>
                    </a>
                </div>                            
            </td>                               
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>    
<form method="post" action="<?php echo base_url() ?>Administrador/ModificarCategoria"> 
            <input type="hidden" name="txtcodcat" id="codc">   
            <div class="modal fade" id="modadmi">       
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-green-active">
                            <h4 class="modal-title">Modificar Nombre de la Categoría</h4>
                        </div>                
                        <div class="modal-body">
                            <div class="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box-body">             
                                            <div class="form-group"> 
                                                <br>
                                                <div class="group-material">
                                                    <input name="txtnomcat" id="nomc" type="text" class="material-control tooltips-general" placeholder="Escribe aquí el nombre de la categoría" required="" pattern="[A-ZÁÉÍÓÚÑ -]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre de la categoría en mayúsculas">
                                                    <span class="highlight"></span>
                                                    <span class="bar"></span>
                                                    <label>Nombre</label>
                                                </div>                     
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