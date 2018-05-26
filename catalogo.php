<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<?php
$tipo= $_GET['tipo'];
$posicion= $_GET['posicion'];
echo "<script>\n";
echo "var tipo='".$tipo."'\n";
echo "</script>\n";
echo "<script>\n";
echo "var posicion='".$posicion."'\n";
echo "</script>\n";
?>
<html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Siempre lindas bisuteria - Nelsy Pedroza</title>
 <link rel="icon" type="image/png" href="img/logo.png"/>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

  <header class="linea">
    <div class="container1">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a id="logo" href="index.php" class="navbar-brand" target="_self">LogoSiempreLindas</a>
          <button id="botonRedes" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" id="logoFb" href="https://www.facebook.com/siemprelindasbisuteria">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="logoInst" href="https://www.instagram.com/siemprelindasbisuteria" href="catalogoN.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="logoWtsapp" href="https://api.whatsapp.com/send?phone=573017005989">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="logoCall" href="contacto.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>  
  </header>
  
 <section>
    <div class="container2">
      <div id="menu">
        <ul class="nav nav-pills nav-justified">
          <li class="nav-item">
            <a class="nav-link" href="productos.php?tipo=ARETES&posicion=1">ARETES</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="productos.php?tipo=COLLAR&posicion=1">COLLARES</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="productos.php?tipo=PULSERA&posicion=1">PULSERAS</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="productos.php?tipo=ANILLO&posicion=1">ANILLOS</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="productos.php?tipo=OTROS&posicion=1">OTROS</a>
          </li>
          <!-- <li class="nav-item">
           <a class="nav-link " href="#">Active</a>
         </li> -->
        </ul>
      </div>
    </div> 
 </section>
 <section class="contenidoIndex">
   <div class="container1">
      
        <!-- aqui nuevo-->
        <div id="todo">
          <div class="">
          </div>
        </div>
     
      <div id="redes2" class="Noaparece">
        <div class="row justify-content-center">
          <div class="col-centered">
            <a class="nav-link" id="logoFb" href="https://www.facebook.com/siemprelindasbisuteria">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </div>
          <div class="col-centered">
            <a class="nav-link" id="logoInst" href="https://www.instagram.com/siemprelindasbisuteria" href="catalogoN.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </div>
          <div class="col-centered">
            <a class="nav-link" id="logoWtsapp" href="https://api.whatsapp.com/send?phone=573017005989">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </div>
          <div class="col-centered">
            <a class="nav-link" id="logoCall" href="contacto.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          </div>
        </div> 
     </div>
   </div>
  </section>
  <section>
    <div id="fotoCentral">
      <img src="img/index/BannerIndex.jpg" class="img-fluid" alt="Responsive image">
    </div>
  </section>
 <footer>
    <div class="container">
      <ul id="ulBottom">
       <li style=""><a href="index.php">Inicio</a></li>
       <li><a href="catalogo.php?tipo=1&posicion=1">Catalogo</a></li>
       <li><a href="contacto.php">Contacto</a></li>
      </ul>
     <p id="copy">Copyright jjsolution 2018. Todos los derechos reservados .</p>
     </div>
 </footer>

<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.js"></script>
<script src="js/catalogo.js"></script>
<script src="js/pantalla.js"></script>
<script src="js/pantallaProductos.js"></script>
</body>
</html>
