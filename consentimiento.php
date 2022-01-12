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
                  <h1 class="d-none d-lg-block">Generando Consentimiento</h1>
                  
                </a>
                
              </div><!-- End Logo -->
              <p>Para que usted pueda continuar con el proceso de vacunación, solicitamos que pueda dar consentimiento a lo siguiente:</p>
              <div class="card mb-3">

                <div class="card-body">

                <div class="text-justify  ">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Lea Atentamente</span>
                                <span class="section-heading-lower">Información de la Vacuna</span>
                            </h2>
                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                            </h2>
                                <span class="section-heading-upper">ANEXO N° 5-B</span>
                                <h2 class="section-heading mb-5"></h2>
                                <span class="section-heading-upper">Consentimiento informado para la Vacunación contra la COVID-19</span>
                                
                                <h2 class="section-heading mb-5"></h2>
                                <li class="list-unstyled-item list-hours-item d-flex ">
                                    
                                    La pandemia ocasionada por la COVID-19 ha producido hasta el momento, más       de
                                    113 millones de casos y más de 2,5 millones de muertes a lo largo de todo el mundo.
                                    La COVID-19 es la enfermedad producida por un nuevo coronavirus,       llamado SARS
                                    Cov-2, aparecido en China en diciembre del 2019. Se estima que el 85% de  los casos
                                    de infección por este virus presentarán síntomas leves, un 15% síntomas   moderados
                                    y un 5% síntomas severos que pueden llevar a la muerte.
                                    
                                </li>
                                </li>
                                
                                <li class="list-unstyled-item list-hours-item d-flex">
                                
                                    La vacunación es la principal herramienta para la prevención de la COVID-19 y se
                                    espera que cuando la mayoría de la población se encuentre vacunada (entre el 70-
                                    85%), la transmisión del virus en la comunidad sea mínima.
                                </li>
                                <li class="list-unstyled-item list-hours-item d-flex">
                                
                                    Posterior a recibir la vacuna, usted se quedará 30 minutos en observación, para
                                    posteriormente retirarse.
                               </li>
                               <li class="list-unstyled-item list-hours-item d-flex">
                                
                                Se le hará entrega de una cartilla, donde se registra la vacunación y que deberá
                                conservar para dosis posteriores de la vacuna.
                                
                           </li>
                        </li>
                            </h2>
                            </ul>
                            <p class="address mb-5">
                                <em>
                                    <strong>En caso presentara alguna molestia, debe acercarse inmediatamente al
                                        establecimiento de salud más cercano a su domicilio.
                                        </strong>
                                    <br />
                                    Por favor repita el siguiente texto para autorizar:
                                </em>
                            </p>
                            <p class="mb-0">
                                <small><em>Essalud</em></small>
                                <br />
                                (317) 585-8468
                            </p>
                        </div>
                <br>
                

                <div class="about-heading-content">
                    <div class="row">
                        <div >
                            <div >
                                <h5 class="section-heading mb-4">
                                    <span class="section-heading-upper">GRABACION DE CONSENTIMIENTO</span>
                                    
                                </h5>
                                <p>Yo, Diga sus nombres y apellidos___ con Dni_________</p>
                                <p class="mb-0">
                                    Declaro:
                                    <P>NO ( ) tengo síntomas compatibles con COVID-19 </P>
                                    <P>NO ( ) he tenido contacto con alguien que dio positivo a la COVID-19 </P>
                                    <em>SI</em>
                                     ( ) doy mi consentimiento para que el personal de salud me aplique la vacuna contra
                                    el COVID-19 
                                    <html lang="en" dir="ltr">
                                        <head>
                                            <meta charset="utf-8">
                                            <title>Grabar audio y video en web.</title>
                                        </head>
                                        <body>
                                            <a href="#" download="pagina.html"></a>
                                            <video autoplay id="video"></video>
                                            <button type="submit" id="boton" class="btn btn-primary w-100">Iniciar Grabación</button>
                                            <script  src="record.js"></script>
                                            
                                        </body>
                                        <br>
                                        <br>
                                        
                                        <form method="POST" action="consultas/crearconsentimiento.php">
                                        <div style="display: none">
                                          <p><textarea name="dni"><?php echo $dni ?></textarea></p>
                                          <p><textarea name="punto"><?php echo $punto ?></textarea></p>
                                        
                                          
                                        </div>
                                        <button type="submit" id="boton" class="btn btn-primary w-100">Aceptar Consentimiento</button>
                                        </form>
                                    </html>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                  

                    
                   
                  </form>

                  

                </div>
              </div>

              

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