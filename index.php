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
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <style type="text/css">
      .border-top{
        border-top: 2px #000000 solid!important;
      }

      .border-bottom{
        border-bottom: 2px #000000 solid!important;
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
       
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    </script>
    
  </head>

  <body>
    <div class="container">
      <div class="row top">
        <div class="col-sm-6 menu">
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#productos">Productos</a></li>
            <li><a href="#blog">Blog</a></li>
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

    <div class="container">
      <div class="row d-flex justify-content-around">
        <div class="col-sm-12" style="margin-bottom:40px;">
          <h2 class="text-center">Llegó el momento de experimentar el futuro, hoy.</h2>
        </div>
        <div class="col-marca d-none d-sm-block">
          <a href="https://www.bmw.com.py/es/index.html" target="_blank"><img src="images/marcas/bmw.png" alt="BMW"></a>
        </div>
        <div class="col-marca d-none d-sm-block">
          <a href="https://www.bmw.com.py/es/topics/fascination-bmw/bmw-concept-vehicle/bmw-concept-i4.html" target="_blank"><img src="images/marcas/marca6.png" alt="Marca6"></a>
        </div>
        <div class="col-marca d-none d-sm-block">
          <a href="https://www.bmw.com.py/es/topics/fascination-bmw/m-gmbh/introduction.html" target="_blank"><img src="images/marcas/iim.png" alt="IIM"></a>
        </div>
        
        <div class="col-marca d-none d-sm-block">
          <a href="https://www.bmw.com.py/es/topics/offers-and-services/personal-services/bmw-service.html" target="_blank"><img src="images/marcas/service.png" alt="BMW premium service"></a>
        </div>
        <div class="col-marca d-none d-sm-block">
          <a href="seminuevos/"><img src="images/marcas/bmw-premium.png" alt="BMW premium selection"></a>
        </div>
        <div class="col-marca d-none d-sm-block">
          <a href="https://www.sylt.com.py/" target="_blank"><img src="images/marcas/sylt.png" alt="Sylt"></a>
        </div>
      </div>
    </div>
    
    <div id="productos" class="container" style="margin-top:70px; margin-bottom:70px;">
      <img src="images/linea.png" style="width:100%;">
        <div class="row">
          <div class="col-sm-3 offset-sm-9">
            <h2 style="float:right; margin-right:10px;">productos</h2>
          </div>
        </div>
        <div class="row" style="margin-top:30px;">
          <div class="col-sm-4 blanco">
            <div class="text">
              <h3>"Desde hace 50 años diseñando para Usted experiencias de movilidad únicas"</h3>
            </div>
          </div>
          <div class="col-sm-8">
            <img src="images/productos.jpg" class="img-fluid">
          </div>
        </div>
        <div class="row d-flex justify-content-around" style="margin-top:30px;">
          <div class="col-sm-3 blog border-top">
            <p class="text-center" style="margin-top:30px; margin-bottom:20px;"> <a href="https://www.bmw.com.py/es/index.html" target="_blank"><img src="images/marcas/bmw.png" alt="BMW"></a></p>
            <p>Desde hace más de 100 años diseñando el presente y futuro de la industria automotriz mundial.</p>
          </div>
          <div class="col-sm-3 blog border-top">
            <p class="text-center" style="margin-top:30px; margin-bottom:20px;"><a href="https://www.bmw.com.py/es/topics/fascination-bmw/bmw-concept-vehicle/bmw-concept-i4.html" target="_blank"><img src="images/marcas/marca6.png" alt="Marca6"></a></p>
            <p>El futuro de la movilidad eléctrica, hibrida y autómata para ser experimentada y utilizada como movilidad en Paraguay hoy.</p>
          </div>
          <div class="col-sm-3 blog border-top">
            <p class="text-center" style="margin-top:30px; margin-bottom:20px;"><a href="https://www.bmw.com.py/es/topics/fascination-bmw/m-gmbh/introduction.html" target="_blank"><img src="images/marcas/iim.png" alt="IIM"></a></p>
            <p>Nuestra linea de vehículos deportivos para la calle que le permiten vivier de la marca BMW.</p>
          </div>
        </div>
        
        <div class="row d-flex justify-content-around" style="margin-top:30px;">
          <div class="col-sm-3 blog border-top">
            <p class="text-center" style="margin-top:30px; margin-bottom:20px;"><a href="https://www.bmw.com.py/es/topics/offers-and-services/personal-services/bmw-service.html" target="_blank"><img src="images/marcas/service.png" alt="BMW premium service"></a></p>
            <p>Experimente la conducción sin preocupaciones. Conozca el servicio de reparación y mantenimiento de BMW Premium Service.</p>
          </div>
          <div class="col-sm-3 blog border-top">
            <p class="text-center" style="margin-top:30px; margin-bottom:20px;"><a href="seminuevos/"><img src="images/marcas/bmw-premium.png" alt="BMW premium selection"></a></p>
            <p>Elija su BMW de ocasión y adquiera un vehículo de plena confianza y seguridad, con rendimientos excepcionales, beneficios y garantías exclusivas para disfrutar del placer de conducir.</p>
          </div>
          <div class="col-sm-3 blog border-top">
            <p class="text-center" style="margin-top:30px; margin-bottom:20px;"><a href="https://www.sylt.com.py/" target="_blank"><img src="images/marcas/sylt.png" alt="Sylt"></a></p>
            <p>Nuestra linea de vehículos deportivos para la calle que le permiten vivier de la marca BMW.</p>
          </div>
        </div>
    </div>

    <div id="blog" class="container" style="margin-top:70px; margin-bottom:70px;">
      <img src="images/linea.png" style="width:100%;">
        <div class="row">
          <div class="col-sm-3 offset-sm-9">
            <h2 style="float:right; margin-right:10px;">blog</h2>
          </div>
        </div>
        <div class="row d-flex justify-content-around" style="margin-top:30px;">
          <div class="col-sm-3 blog">
            <img src="images/blog1.png" class="img-fluid">
            <h4>MIRAR HACIA ADELANTE, CUIDANDO EL PERESENTE</h4>
            <p>Escuche el podcast completo del encuentro virtual con el Dr. Edgardo Maya, quien nos habla sobre cómo lidiar con la situación actual y mantenernos conectados con el futuro sin dejar de lado las necesidades emocionales y psicológicas del presente. Acomódese en casa y disfrute de una conferencia motivadora y optimista para fortalecernos en la distancia. </p>
            <p class="text-right">
              <a href="https://soundcloud.com/bmwparaguay/una-mirada-hacia-adelante-mirando-el-futuro-con-edgardo-maya" target="_blank">Leer más</a>
            </p>
          </div>
          <div class="col-sm-3 blog">
            <img src="images/blog2.png" class="img-fluid">
            <h4>PUERTAS VIRTUALES AL UNIVERSO BMW </h4>
            <p>En tiempos de confinamiento, no pierda de vista su pasión por un BMW. Conozca la novedosa serie de cápsulas de video “BMW Today” que ofrecen una fascinante colección de modelos con escenas y detalles espectaculares que puede apreciar sin necesidad de salir de casa. Usted está primero, manténgase seguro.</p>
            <p class="text-right">
              <a href="https://www.bmw.com/es/performance/juegos-de-carreras-consejos-de-un-profesiona.html" target="_blank">Leer más</a>
            </p>
          </div>
          <div class="col-sm-3 blog">
            <img src="images/blog3.png" class="img-fluid">
            <h4>CONSEJOS SOBRE JUEGOS DE CARRERAS</h4>
            <p>Un corredor profesional, también tienen consejos para jugadores virtuales que buscan técnicas para mejorar en el mando. Demostrando su fascinación temprana por el gaming, Jimmy Broadbent nos revela los 10 consejos más importantes que todo gamer debe tener en cuenta para mejorar sus habilidades de conducción. Acelere los motores virtuales y quédese en casa.</p>
            <p class="text-right">
              <a href="https://www.bmw.com/es/performance/juegos-de-carreras-consejos-de-un-profesiona.html" target="_blank">Leer más</a>
            </p>
          </div>
        </div>
    </div>

    <div class="container border-top border-bottom" style="margin-top:70px; margin-bottom:70px;">
      <div class="row d-flex justify-content-around">
        <div class="col-sm-12" style="margin-bottom:40px;">
          <h2 class="text-center" style="padding-top: 50px;"><a href="contacto.php">Contacte con uno de nuestros representantes</a></h2>
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