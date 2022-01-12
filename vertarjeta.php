<?php
include "consultas/db.php";
date_default_timezone_set("America/Lima");
$buscar = $_POST['id-dni'];                                     
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
    <div class="app" id="japp">
        <style>
        body {
            font-family: sans-serif;
            font-size: 1rem;
            line-height: 1.2em;
            margin: 0;
            background: #e4e4e4;
        }
    
        * {
            box-sizing: border-box;
        }
    
        .page-container {
            /*border: 1px solid #75a5d0;*/
            padding: 30px;
            max-width: 900px;
            margin: 2rem auto;
            background: #E5E7E9 ;
            border: #ccc solid 1px;
            box-shadow: 0 0 15px rgba(0,0,0,.25);
        }
    
        .table-container {
            /*background-color: yellow;*/
            overflow-x: auto;
        }
    
        .table-certificado {
            border-spacing: 0;
            width: 100%;
        }
    
            .table-certificado thead th,
            .table-certificado tbody td {
                padding: 0.5rem;
                word-wrap: break-word;
            }
    
            .table-certificado thead th {
                border-bottom: 1px solid #E74C3C;
            }
    
            .table-certificado tbody td {
                border-bottom: 1px solid #E74C3C;
                border-right: 1px solid #E74C3C;
                height: 65px;
            }
    
        .logo {
            text-align: left;
        }
    
        .logo-minsa {
            width: 200px;
        }
    
        .titulo {
            color: #FF5733;
        }
    
        .texto,
        .data {
            font-size: 0.8rem;
        }
    
        .subtitulo {
            font-weight: bold;
        }
    
        .virus {
            font-size: 1rem;
            font-weight: bold;
        }
    
        .codigo-qr {
            text-align: center;
        }
    
        .table-data {
            border: solid 1px #E74C3C;
            border-spacing: 0;
            font-size: 0.75rem;
            text-align: center;
            width: 100%;
        }
    
            .table-data thead th {
                border: 1px solid #E74C3C;
                height: 50px;
            }
    
            .table-data tbody td {
                border: 1px solid #E74C3C;
                height: 50px;
            }
    
        .image-qr {
            width: 150px;
        }
    </style>
    <div class="page-container">
        <div class="table-container">
            <table class="table-certificado">
                <thead>
                    <tr>
                        <th colspan="5">
                            
                            <span class="titulo">
                                CERTIFICADO DE VACUNACIÓN
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $query2 = mysqli_query($conn, "SELECT * FROM tblciudadano WHERE dni_ciu = '$buscar'");
                    while ($array2 = mysqli_fetch_array($query2)) {
                  ?>
                    <tr>
                        <td colspan="2" style="width: 40%; vertical-align: top;">
                            <span class="texto subtitulo">
                                Datos Personales : 
                            </span>
                            <br>
                            <label id="nombres-apellidos" class="data"><?php echo $array2['apepa_ciu']." ".$array2['nom_ciu']." ".$array2['apema_ciu'] ?></label>
                        </td>
                        <td style="width: 20%; vertical-align: top;">
                            <span class="texto subtitulo">
                                Fecha de Nacimiento :
                            </span><br>
                            <label id="fecha-nacimiento" class="data"><?php echo $array2['fecnac_ciu'] ?></label>
                        </td>
                        
                        <td rowspan="3" class="codigo-qr" style="width: 25%; border-right: 0; vertical-align: top;">
                            <span class="texto subtitulo">Código QR : </span><br>
                            <canvas id="cImage-qr" height="90" width="90"></canvas>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="vertical-align: top;">
                            <span class="texto subtitulo">Documento de Identidad : </span><br>
                            <label id="tipo-numero-documento" class="data"><?php echo $array2['dni_ciu'] ?></label>
    
                        </td>
                        <td colspan="2" style="width: 20%; vertical-align: top;">
                            <span class="texto subtitulo">Nacionalidad</span><br>
                            <label id="nacionalidad" class="data">PERU</label>
                        </td>
                    </tr>
                    <?php
                     }
                    ?>
                    <tr>
                      <?php
                        $query1 = mysqli_query($conn, "SELECT * FROM tbltarjeta WHERE dni_pac = '$buscar'");
                    
                        while ($array = mysqli_fetch_array($query1)) {
                            $punto = $array['punto_id'];
                            $id_tar = $array['tar_id'];
                            $query3 = mysqli_query($conn, "SELECT * FROM tblstockvacuna WHERE punto_id = '$punto'");
                            
                                while ($array3 = mysqli_fetch_array($query3)) {
                                    $vac = $array3['vac_id'];
                                    $query4 = mysqli_query($conn, "SELECT * FROM tblvacuna WHERE id_vac = '$vac'");
                                    while ($array4 = mysqli_fetch_array($query4)) {
                                        $query5 = mysqli_query($conn, "SELECT * FROM tbldosis WHERE id_tar = '$id_tar'");
                                        while ($array5 = mysqli_fetch_array($query5)) {
                                            
                                            
                                            $query6 = mysqli_query($conn, "SELECT * FROM tblpuntovacunacion WHERE id_pvac = '$punto'");
                                            while ($array6 = mysqli_fetch_array($query6)) {
                      ?>
                        <td colspan="5" style="width: 100%; border-right: 0;vertical-align: top;">
                            <table class="table-data">
                                <thead>
                                    <tr>
                                        <th style="width: 15%;">Fecha de Vacunación</th>
                                        <th style="width: 15%;">Vacuna</th>
                                        <th style="width: 10%;">Dosis</th>
                                        <th style="width: 30%;">Lote de Vacuna</th>
                                        <th style="width: 30%;">Lugar de Vacunación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td><?php echo $array5['fecha']?></td>
                                        <td><?php echo $array4['nom_vac'] ?></td>
                                        <td><?php echo $array5['num_vac'] ?></td>
                                        <td><?php echo $array3['lote_stvac'] ?></td>
                                        <td><?php echo $array6['nom_pvac']?></td>
                                    </tr>
                                    
                                </tbody>
                            </table><br>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 25%; border-bottom: 0; vertical-align: top;">
                            <span class="texto subtitulo">Fecha de Emisión</span><br>
                            <label id="fecha-emision" class="data"><?php echo date("Y-m-d"); ?></label>
                        </td>
                        <td colspan="4" style="width: 75%; border-right: 0; border-bottom: 0;">
                          <button type="button" onclick="window.print()" class="btn btn-primary">Imprimir</button>
                          
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        </div>
    <script type="module" src="1635280457195app/index.js"></script>
    <script nomodule="">document.location.href = 'error-compatibilidad.html';</script>

    </script>
          </table>
          <?php
           }}}}}
           ?>
          
          </div>
      </div>
    </div>
  </body>
</html>