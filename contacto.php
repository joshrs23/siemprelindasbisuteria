<?php
require("server/class.phpmailer.php");
require("server/class.smtp.php");


//header( "refresh:8;url=../contáctenos.html" );

if(isset($_POST['email'])) {



    // EDIT THE 2 LINES BELOW AS REQUIRED

  $email_to = "nelsypedroza2009@hotmail.es ";

      //$email_subject = "Your email subject line";





  function died($error) {

        // your error code can go here

    echo "Ha sucedido un error al enviar el mensaje, vuelve a enviar el mensaje o intentalo a mas tarde. ";

    

    die();

  }



    // validation expected data exists

  if(!isset($_POST['nombre']) ||

    !isset($_POST['email']) ||

    !isset($_POST['mensaje'])) {

    died('Lo sentimos, pero parece que hay problemas con el mensaje. Prueba nuevamente más tarde.');      

}



    $nombre = $_POST['nombre']; // required

    $email_from = $_POST['email']; // required

    $asunto = "Pregunta siempre lindas bisuteria"; // not required

    $mensaje = $_POST['mensaje']; // required



    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {

      $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$nombre)) {

      $error_message .= 'The First Name you entered does not appear to be valid.<br />';

    }

    if(strlen($mensaje) < 2) {

      $error_message .= 'The mensaje you entered do not appear to be valid.<br />';

    }

    if(strlen($error_message) > 0) {

      died($error_message);

    }

    $email_message = "El contenido del mensaje es el siguiente:.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "First Name: ".clean_string($nombre)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "asunto: ".clean_string($asunto)."\n";

    $email_message .= "mensaje: ".clean_string($mensaje)."\n";





// create email headers

    $headers = 'From: '.$email_from."\r\n".

    'Reply-To: '.$email_from."\r\n" .

    'X-Mailer: PHP/' . phpversion();


}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
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
            <a class="nav-link" href="productos.php?tipo=1&posicion=1">OTROS</a>
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
      <div class="row">
        <div class="col-12">
          <div id="logoContacto"class="col-6">
            <img src="img/contacto/contacto.png" class="img-fluid" alt="Responsive image">
          </div>
        </div>
      </div>
        <div class="row col-12">
          <div id="formContacto"class="col-6">
            <div class="card contactoF">
              <h3 class="card-header">Escribenos</h3>
              <div class="card-body">
                <!--inicio formulario  -->
                 <?php
                  if(isset($_POST['email'])){
                    //if(!$mail->Send()) {
                    if(@mail($email_to, $asunto, $email_message, $headers,'-f noreply@siemprelindasbisuteria.com')){
                      ?>
                      <div class="alert alert-success" role="alert">
                        <strong>Gracias!</strong><br>
                        <p>Su mensaje ha sido enviado con éxito.</p><br>
                        <p>Prontamente nos conctactaremos con usted</p>
                      </div>
                      <?php
                    } else {
                      //echo "¡¡Enviado!!";
                      //echo "<script>alert('asdasd');</script>"
                    ?>              
                      <div class="alert alert-danger" role="alert">
                        <strong>Lo sentimos!</strong><br>
                        <p>Ha ocurrido un problema.</p><br>
                        <p>Intente nuevamente más tarde</p>
                      </div>
                    <?php
                    }
                  }
                ?>
                <form role="form" action="contacto.php" method="post" class="letraContacto">
                    <div class="form-group">
                      <label for="validationDefault01">Nombre</label>
                      <input type="text" class="form-control" id="validationDefault01" name="nombre"placeholder="Ingrese su nombre" required>
                    </div>
                     <div class="form-group">
                      <label for="validationDefaultUsername">Correo</label>
                      <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required>
                    </div>
                    <div class="form-group">
                      <label for="validationDefault01">Asunto</label>
                      <input type="text" class="form-control" id="validationDefault01" name="asunto"placeholder="Ingrese su asunto" required>
                    </div>
                    <div class="form-group">
                      <label for="validationDefault02">Mensaje</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje"rows="8" required></textarea>
                    </div>
                  <button class="btn btn-default" type="submit">Enviar</button>
                </form>
                <!-- finaliza formulario -->
              </div>
          </div>
        </div>
        <div id="datosContacto" class="col-6">
          <div >
            <div class="card col" style="width: 34rem;">
               <img class="card-img-top" src="img/contacto/logo.png" alt="Card image cap">
            </div>
            <div class="card ajusteMarco col" style="width: 34rem;">
               <img class="card-img-top" src="img/contacto/informacion.png" alt="Card image cap">
            </div>
            <div class="col letraVenta">
              <h5>Envios a toda Colombia y compras por whatsapp.</h5>               
            </div>
          </div>
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
<script src="js/main.js"></script>
<script src="js/pantalla.js"></script>
<script src="js/pantallaContacto.js"></script>
</body>
</html>
