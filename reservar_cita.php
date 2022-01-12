<?php
include "consultas/db.php";
date_default_timezone_set("America/Lima");
$horaInicial = date('H:i');
$minutoAnadir=30;
$segundos_horaInicial=strtotime($horaInicial);
$segundos_minutoAnadir=$minutoAnadir*60;
$nuevaHora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);
?>
    
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Vacunate Ya<span>!</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      
    </div>
  </header><!-- End Header -->

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <h1 class="d-none d-lg-block">Generando Cita</h1>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                  <form method="GET">
                  <div class="input-group">
                      <input type="text" class="form-control form-control-user" placeholder="Ingresar DNI"aria-label="Search" aria-describedby="basic-addon2" name="dni">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="submit" name="buscarper">
                            <i class="bi bi-search"></i>
                          </button>
                        </div>
                        
                  </div>
                  </form>
                  <br>
                    
                  <form method="POST" action="consultas/actcita.php" class="row g-3 needs-validation" novalidate>
                    <?php if(isset ($_GET['buscarper'])) {
                        $buscar = $_GET['dni'];
                        
                        $query1 = mysqli_query($conn, "SELECT * FROM tblciudadano WHERE dni_ciu = '$buscar'");
                        $citas = mysqli_query($conn, "SELECT MAX(id_cita) FROM tblcita");
                        while ($ci = mysqli_fetch_array($citas)) {
                          $ult_punto = $ci['MAX(id_cita)'];
                          $cit = mysqli_query($conn, "SELECT * FROM tblcita WHERE id_cita = '$ult_punto'");
                          while ($c = mysqli_fetch_array($cit)) {
                            $id_p = $c['punto_id'];
                          $query3 = mysqli_query($conn, "SELECT * FROM tblpuntovacunacion WHERE id_pvac = '$id_p'");
                        while ($array = mysqli_fetch_array($query3)) {
                             
                        while ($per = mysqli_fetch_array($query1)) {
                         
                         
                    ?>
                    <div class="col-12">
                      <div>
                        <input type="hidden" name="id_citaupd"  class="form-control" value="<?php echo $ci['MAX(id_cita)']?>">
                        <input type="hidden" name="dni"  class="form-control" value="<?php echo $per['dni_ciu']?>">
                        <input type="hidden" name="punto"  class="form-control" value="<?php echo $array['id_pvac']?>">
                      </div>
                      <br>
                      <label class="form-label">Pre Nombres</label>
                      <div>
                        <input type="text" readonly onmousedown="return false;" name="nompaciente" class="form-control" id="nompaciente" value="<?php echo $per['apepa_ciu']?>">
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Apellido Paterno</label>
                      <input type="text" readonly onmousedown="return false;" name="papaciente" class="form-control" id="papaciente" value="<?php echo $per['nom_ciu']?>">
                    </div>

                    <div class="col-12">
                      <label class="form-label">Apellido Materno</label>
                      <input type="text" readonly onmousedown="return false;" name="mapaciente" class="form-control" id="mapaciente" value="<?php echo $per['apema_ciu']?>">
                    </div>
                    
                    <div class="col-12">
                      <label class="form-label">Fecha de Nacimiento</label>
                      <input type="text" readonly onmousedown="return false;" name="papaciente" class="form-control" id="papaciente" value="<?php echo $per['fecnac_ciu']?>">
                    </div>
                                          
                    <div class="col-12">
                      <label class="form-label">Lugar de vacunación</label>
                      <input type="text" readonly onmousedown="return false;" name="mapaciente" class="form-control" id="mapaciente" value="<?php echo $array['nom_pvac']?>">
                    </div>
                    <?php
                    }}}}}
                    ?>
                    
                    <div class="col-12">
                      <label class="form-label">Fecha</label>
                      <input type="date"  name="fecha" readonly onmousedown="return false;" class="form-control" value="<?php echo date("Y-m-d"); ?>">
                    </div>
                                    
                    <div class="col-12">
                      <label class="form-label">Hora</label>
                      <input type="time"  name="hora" readonly onmousedown="return false;" class="form-control" value="<?php echo $nuevaHora; ?>">
                    </div>
                    </div>
                    
                    <br>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Generar</button>
                    </div>
                </div>
              </div>
              </form>
              

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>