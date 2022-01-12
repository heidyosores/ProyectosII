<?php
include "consultas/db.php";
$citas = mysqli_query($conn, "SELECT MAX(id_cita) FROM tblcita");
while ($ci = mysqli_fetch_array($citas)) {
$ult_punto = $ci['MAX(id_cita)'];
$cit = mysqli_query($conn, "SELECT * FROM tblcita WHERE id_cita = '$ult_punto'");
                          while ($c = mysqli_fetch_array($cit)) {
                            $dna = $c['ciu_dni'];
                            $p = $c['punto_id'];
                          $cita = mysqli_query($conn, "SELECT * FROM tblciudadano WHERE dni_ciu = '$dna'");
                          while ($d = mysqli_fetch_array($cita)) {
                          $punto = mysqli_query($conn, "SELECT * FROM tblpuntovacunacion WHERE id_pvac = '$p'");
                          while ($ad = mysqli_fetch_array($punto)) {
                            $cupocodigo=$c['id_cita'];
$dni=$c['ciu_dni'];
$nombres=$d['apepa_ciu'];
$apepa = $d['nom_ciu'];
$apema = $d['apema_ciu'];
$apellidos=$apepa." ".$apema;
$edad=$d['fecnac_ciu'];
$lugar=$ad['nom_pvac'];
$fecha=$c['fecha_cita'];
$hora=$c['hora_cita'];
                                    
     }}}}
?>


<!DOCTYPE html>
<html lang="es">
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vacunatón</title>
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
    <h1 class="text-center">
      Cupo generado
    </h1>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <table class="table">
            <tbody>
              <tr>
                <td>
                  <strong>Numero de Cupo:<strong>
                  <?php echo $cupocodigo; ?>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>DNI:</strong>
                  <?php echo $dni; ?>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>Nombres: </strong>
                  <?php echo $nombres; ?>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>Apellidos: </strong>
                  <?php echo $apellidos; ?>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>Fecha Nacimiento: </strong>
                  <?php echo $edad; ?>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>Lugar: </strong>
                  <?php echo $lugar; ?>
                </td>
              </tr>

              <tr>
                <td>
                  <strong>Fecha de Cita: </strong>
                  <?php echo $fecha; ?>
                </td>
              </tr>

              <tr>
                <td>
                  <strong>Hora de Cita: </strong>
                  <?php echo $hora; ?>
                </td>
              </tr>
              
            </tbody>
          </table>
          <button type="button" onclick="window.print()" class="btn btn-primary">Imprimir</button>
          <button type="button" onclick="window.open('/final/index.html')" class="btn btn-secondary">Finalizar</button>
        </div>
      </div>
    </div>
  </body>
</html>