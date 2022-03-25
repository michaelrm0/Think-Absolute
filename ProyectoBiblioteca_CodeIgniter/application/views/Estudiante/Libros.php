<div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema bibliotecario <small>Catálogo de libros</small></h1>
            </div>
        </div>
         <div class="container-fluid"  style="margin: 40px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="<?=base_url()?>assets/img/checklist.png" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido al catálogo, selecciona una categoría de la lista para empezar.
                </div>                         
            </div>
        </div>

        <div class="container-fluid" style="margin: 50px 50px;">
            <form class="form" action="<?=base_url()?>Estudiante/Buscar" method="POST">
                <div class="row" style="margin-bottom:10px;">               
                    <div class="col">                     
                        <input class="form-control" name="bus" type="search" placeholder="Ingrese el Nombre del Libro o el autor">                                       
                    </div>               
                </div>
                <div class="row">
                    <div class="col text-center">           
                        <button class="btn btn-primary form-control" style="width: 70%" type="submit">Buscar</button>              
                    </div>
                </div>
            </form>
        </div>

        <div class="container-fluid" style="margin: 0 0 50px 0;">
            <h2 class="text-center" style="margin: 0 0 25px 0;">Categorías</h2>
            <ul class="list-unstyled text-center list-catalog-container">
                <li class="list-catalog"><a href="<?=base_url()?>Estudiante/Libros">Todas</a></li>
                <?php foreach ($categorias as $categoria) : ?> 
                <li class="list-catalog"><a href="<?=base_url()?>Estudiante/CategoriaSeleccionada?cat=<?=$categoria->CodCat?>"><?=$categoria->DescCat?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="container-fluid">  
            
             <?php if ($libros != null){           
             foreach ($libros as $libro) : ?> 
            <div class="media media-hover">
                <div class="media-left media-middle">
                    <a href="#!" class="tooltips-general" data-toggle="tooltip" data-placement="right" title="Más información del libro">
                      <img class="media-object" src="<?=base_url()?>/assets/img/book.png" alt="Libro" width="200" height="250">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><?=$libro->TitLib?></h4>
                    <div class="pull-left">
                        <strong><?=$libro->NombAut?><br>
                        <strong><?=$libro->AnioLib?><br>
                    </div>
                    <p class="text-center pull-right">
                        <a href="<?=base_url()?>Estudiante/PrestarLibro?libro=<?=$libro->CodLib?>" class="btn btn-info btn-xs" style="margin-right: 10px;"><i class="zmdi zmdi-info-outline"></i> &nbsp;&nbsp; Préstamo</a>
                    </p>
                    <p class="text-center pull-right">
                        <a href="#!" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModalCenter" style="margin-right: 10px;"><i class="zmdi zmdi-info-outline"></i> &nbsp;&nbsp; Más Información</a>
                    </p>
                </div>
            </div>
             <?php endforeach;} else{  ?>
                 <div class="media-body">
                    <div class="alert alert-danger text-center" role="alert">
                    No se Encontraron resultados para esta búsqueda.
                    </div>
                </div>
            <?php } ?>
        </div>

<!-- Modal -->
 <?php  foreach ($libros as $libro) : ?> 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?=$libro->TitLib?></h5>
      </div>
      <div class="modal-body">
        Ahora no Joven estamos Trabajando <?=$libro->NombAut?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

  <?php endforeach;?>