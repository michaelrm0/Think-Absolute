<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="Shortcut Icon" type="image/x-icon" href="<?=base_url();?>assets/icons/book.ico" />-->
    <!--<script src="<?=base_url();?>js/sweet-alert.min.js"></script>-->
    <!--<link rel="stylesheet" href="<?=base_url();?>css/sweet-alert.css">-->
    <link rel="stylesheet" href="<?=base_url();?>css/material-design-iconic-font.min.css">
    <!--<link rel="stylesheet" href="<?=base_url();?>css/normalize.css">-->
    <link rel="stylesheet" href="<?=base_url();?>css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="<?=base_url();?>css/jquery.mCustomScrollbar.css">-->
    <link rel="stylesheet" href="<?=base_url();?>css/style.css">
    <link rel="stylesheet" href="<?=base_url();?>css/login.css"/>
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <!--<script>window.jQuery || document.write('<script src="<?=base_url();?>js/jquery-1.11.2.min.js"><\/script>')</script>-->
    <!--<script src="<?=base_url();?>js/modernizr.js"></script>-->
    <!--<script src="<?=base_url();?>js/bootstrap.min.js"></script>-->
    <!--<script src="<?=base_url();?>js/jquery.mCustomScrollbar.concat.min.js"></script>-->
    <!--<script src="<?=base_url();?>js/main.js"></script>-->
</head>
<body class="full-cover-background" style="background-image:url(<?=base_url();?>assets/img/font-login.jpg);">
    <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>
       <form method="post" action="<?=base_url();?>Conexion/ingresar">
            <div class="group-material-login">
              <input type="text" name="txtusuario" class="material-login-control" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-account"></i> &nbsp; Nombres</label>
            </div>
            <div class="group-material-login">
              <input type="password" name="txtclave" class="material-login-control" required="" maxlength="70">
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
            </div>
            <div class="group-material">
                <select name="cbotipo" class="material-control-login" required="">
                    <option value="" disabled="" selected="">Tipo de usuario</option>
                    <option value="1">Estudiante</option>
                    <option value="2">Docente</option>
                    <option value="3">Bibliotecario(a)</option>
                    <option value="4">Administrador(a)</option>
                </select>
            </div>           
            <?php if($this->session->flashdata("error")):?>
                <div class="alert alert-danger">
                    <p><?php echo $this->session->flashdata("error"); ?></p>
                </div><br>                        
            <?php endif; ?> 
            <button class="btn-login" type="submit">Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>
        </form>
    </div>  
</body>
</html>

