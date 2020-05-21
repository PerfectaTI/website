<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Perfecta - Bienvenidos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
    <script src="js/contacto.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <style type="text/css">
      .border-top{
        border-top: 2px #000000 solid!important;
      }

      .border-bottom{
        border-bottom: 2px #000000 solid!important;
      }
    </style>
    
  </head>

  <body>
    <div class="container">
      <div class="row top">
        <div class="col-sm-6 menu">
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php#productos">Productos</a></li>
            <li><a href="index.php#blog">Blog</a></li>
            <li><a href="contacto.php">Contactos</a></li>
          </ul>
        </div>
        <div class="col-sm-6">
            <img src="images/logo.png" class="img-fluid logo">
        </div>
      </div>

      <div class="banner">
          <div class="texto">
            <h1>viví lo que imaginas</h1>
          </div>
      </div>

      

    </div>

    <div class="container border-bottom" style="margin-top:70px; margin-bottom:70px;">
      <img src="images/linea.png" style="width:100%;">
        <div class="row">
          <div class="col-sm-3 offset-sm-9">
            <h2 style="float:right; margin-right:10px;">contacto</h2>
          </div>
        </div>
        <div class="row d-flex justify-content-around" style="margin-top:30px;">
          <div class="col-sm-6 border">
            <form action="ajax/contacto-process.php" method="post" id="form-contacto">
                <input type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido" class="form-control" required>
                <input type="email" name="correo" id="correo" placeholder="Correo electrónico" class="form-control" required>
                <input type="number" name="telefono" id="telefono" placeholder="Teléfono" class="form-control" required>
                <textarea name="mensaje" id="mensaje" placeholder="Mensaje" class="form-control" required></textarea>
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-xs-12">
                        <div class="g-recaptcha" data-sitekey="6LcWIbAUAAAAAIVLNK4dePPyn92XAlPXP7X_BoRk"></div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-xs-12">
                        <input type="submit" name="btn-enviar" id="btn-enviar">
                    </div>
                </div>
            </form>
          </div>
          <div class="col-sm-5 offset-sm-1 cont">
            <h3>Dirección</h3>
            <h4>Santísimo Sacramento 347, Asunción</h4>
            <h3>Teléfono</h3>
            <h4>(021) 689 3000</h4>
            <h3>Email</h3>
            <h4>contacto@perfecta.com.py</h4>
          </div>
        </div>
        <iframe style="width:100%; margin-top:100px; margin-bottom:50px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.4685834950415!2d-57.59200768533865!3d-25.288456133509094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945da88280e40ff9%3A0xfa45d9e927566b5!2sPerfecta!5e0!3m2!1ses!2spy!4v1588974702914!5m2!1ses!2spy" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <!-- Modal-->
    <div id="modal-contacto" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-titulo">Información</h4>
                </div>
                <div class="modal-body">
                    <p id="modal-texto"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-modal modal-button" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:100px;">
      <div class="row top">
          <div class="col-sm-6 col-4">
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="index.php#productos">Productos</a></li>
              <li><a href="index.php#blog">Blog</a></li>
              <li><a href="contacto.php">Contactos</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-8">
            <div class="row">
              <div class="col-sm-6 d-none d-sm-block">
                <a href="https://www.facebook.com/perfecta.py" target="_blank"><img src="images/fb.png" class="img-fluid" style="margin:10px;"></a>
                <a href="https://www.instagram.com/perfecta.py/" target="_blank"><img src="images/ig.png" class="img-fluid" style="margin:10px;"></a>
              </div>
              <div class="col-sm-6">
                <img src="images/logo-perfecta50.png" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167312969-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167312969-1');
</script>  
  </body>
</html>