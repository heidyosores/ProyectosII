<?php
include "consultas/db.php";
$citas = mysqli_query($conn, "SELECT MAX(id_cita) FROM tblcita");
while ($ci = mysqli_fetch_array($citas)) {
$ult_punto = $ci['MAX(id_cita)'];
$cit = mysqli_query($conn, "SELECT * FROM tblcita WHERE id_cita = '$ult_punto'");
                          while ($c = mysqli_fetch_array($cit)) {
                            $dni = $c['ciu_dni'];
                            $punto = $c['punto_id'];
 }}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Inner Page - BizLand Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.6.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Vacunate Ya<span>!</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-up">


    <section class="inner-page">
      <div class="container text-center">
          <img src="assets/img/logo.png" alt="">
          <h1 class="d-none d-lg-block text-primary">Generando Consentimiento</h1>
          <p><strong>Para que usted pueda continuar con el proceso de vacunación, solicitamos que lea detenidamente lo siguiente:</strong></p>
      </div>
      <div class="container text-justify">
        <p>
          La vacunación es la principal herramienta para la prevención de la COVID-19 y se
          espera que cuando la mayoría de la población se encuentre vacunada (entre el 70-
          85%), la transmisión del virus en la comunidad sea mínima.
        </p>
        <p>
          Posterior a recibir la vacuna, usted se quedará 30 minutos en observación, para
          posteriormente retirarse.
        </p>
        <p>
          En caso presentara alguna molestia, debe acercarse inmediatamente al
          establecimiento de salud más cercano a su domicilio.
        </p>
      </div>
      <div class="container text-center">
        <p><strong>Si esta de acuerdo con lo anterior, por favor le solicitamos acceda grabar una breve aceptación: </strong></p>
      </div>

      <div class="container text-center">
        <p><strong>Presione el botón a continuación y repita lo siguiente: </strong></p>
        <select name="listaDeDispositivos" id="listaDeDispositivos"></select>
        <br>
        <br> 
        <button id="btnComenzarGrabacion" class="btn btn-primary btn-sm">Iniciar</button>
        <button id="btnDetenerGrabacion" class="btn btn-primary btn-sm">Detener</button>
        <br><br>
        <p><strong>Acepto recibir la vacuna! </strong></p>
      </div>
      <div class="container text-center">
      <form method="POST" action="consultas/crearconsentimiento.php">
        <p id="duracion"></p>
        <div style="display: none">
          <p><textarea name="dni"><?php echo $dni ?></textarea></p>
          <p><textarea name="punto"><?php echo $punto ?></textarea></p>                           
        </div>
      </div>
        <div class="container text-center">
          <p><strong>Finalmente guarde su aceptación presionando el siguiente botón: </strong></p>
          <button type="submit" id="boton" class="btn btn-primary btn-sm">Guardar Consentimiento</button>
        </div>
      </form>

      
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

   
  </footer><!-- End Footer -->


  <!-- Vendor JS Files -->
  <script src="script.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>