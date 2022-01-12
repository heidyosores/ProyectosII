<?php
include "consultas/db.php";
date_default_timezone_set("America/Lima");
$nm = null;
$fecha_dosis = null;
$lugar = null;
$num_dosis = 0;
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tarjeta de Vacunación</title>
    

    <!-- Custom fonts for this template-->
    <link href="personal/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="personal/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="administrador.php">
                
                <div class="sidebar-brand-text mx-3">Vacunatón  Perú 2021</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="administrador.php">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Panel de Control</span></a>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            

            <div class="sidebar-heading">
                Pacientes
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="tarjeta.php">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>Generar Tarjeta</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="estado.php">
                    <i class="fas fa-fw fa-stethoscope"></i>
                    <span>Pedidos de Vacuna</span>
                </a>
            </li>

            <div class="sidebar-heading">
                Reportes
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="diario.php">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Visualizar</span>
                </a>
            </li>

           
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador</span>
                                <img class="img-profile rounded-circle"
                                    src="personal/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>
                 </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="text-center">Generar Tarjeta de Vacuna</h1>
                <!-- Realizar busqueda -->
                    <form method="GET" class="form-inline my-2 my-lg-0">
                    <input type="text" class="form-control form-control-user" placeholder="Ingresar DNI"aria-label="Search" aria-describedby="basic-addon2" name="dni">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="buscarper">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div> 
                    </form>
                    
                     
                     
                     <br>
                    <table class="table table-striped">
                    <h4 class="text-izquierdo">Datos de ciudadano:</h4>  
                        <thead>
                            <tr>
                                <th scope="col">DNI</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">Pre Nombres</th>
                                <th scope="col">Fecha de Nacimiento</th>
                                
                                
                            </tr>
                        </thead>
                            <tbody>
                            <?php if(isset ($_GET['buscarper'])) {
                        $buscar = $_GET['dni'];
                        
                        $query1 = mysqli_query($conn, "SELECT * FROM tbltarjeta WHERE dni_pac = '$buscar'");
                        $query2 = mysqli_query($conn, "SELECT * FROM tblciudadano WHERE dni_ciu = '$buscar'");
                        while ($array = mysqli_fetch_array($query1)) {
                            $punto = $array['punto_id'];
                            $id_tar = $array['tar_id'];

                            $query3 = mysqli_query($conn, "SELECT * FROM tblstockvacuna WHERE punto_id = '$punto'");
                            while ($array2 = mysqli_fetch_array($query2)) {
                                while ($array3 = mysqli_fetch_array($query3)) {
                                    $vac = $array3['vac_id'];
                                    $query4 = mysqli_query($conn, "SELECT * FROM tblvacuna WHERE id_vac = '$vac'");
                                    while ($array4 = mysqli_fetch_array($query4)) {
                                        $query5 = mysqli_query($conn, "SELECT * FROM tbldosis WHERE id_tar = '$id_tar'");
                                        while ($array5 = mysqli_fetch_array($query5)) {
                                            $fecha_dosis = $array5['fecha'];
                                            $num_dosis = $array5['num_vac'];
                                            if($num_dosis == 1){
                                                $nm = "Primera Dosis";     
                                            }
                                            if($num_dosis == 2){
                                                $nm = "Segunda Dosis";     
                                            }
                                            if($num_dosis == 3){
                                                $nm = "Tercera Dosis";     
                                            }
                                            $query6 = mysqli_query($conn, "SELECT * FROM tblpuntovacunacion WHERE id_pvac = '$punto'");
                                            while ($array6 = mysqli_fetch_array($query6)) {
                                                $lugar = $array6['nom_pvac'];
                                            }
                                        }
                        ?>
                                <tr>
                                    <td><?php echo $array2['dni_ciu']?></td>
                                    <td><?php echo $array2['nom_ciu']?></td>
                                    <td><?php echo $array2['apema_ciu']?></td>
                                    <td><?php echo $array2['apepa_ciu']?></td>
                                    <td><?php echo $array2['fecnac_ciu']?></td>
                                    <td> <button type="button" class="btn btn-primary verbtn" data-toggle="modal" data-target="#tarjeta">
                                    Visualizar Tarjeta - <i class="fas fa-search fa-sm"></i> </button></td>
                                                                    
                                </tr>
                            
                        </tbody>

                      </table>


                      <table class="table table-striped">
                        <h4 class="text-izquierdo">Vacuna contra Covid:</h4>  
                        <thead>
                            <tr>
                                <th scope="col">Dosis</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Lugar de vacunación</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $nm?></td>
                                    <td><?php echo $fecha_dosis?></td>
                                    <td><?php echo $lugar?></td>                               
                                </tr>
                            </tbody>
                      </table>
                    <form method="POST" action="consultas/creardosis.php">  
                    <?php
                    switch ($num_dosis) {
                        case '1':
                            echo "
                            <div class='form-group'>
                                <label for=''>Dosis: </label>
                                <select name='dosis' class='form-select'>
                                    
                                    <option value='2'>Segunda Dosis</option>
                                        
                                </select>
                            </div>
                            ";
                            break;
                        case '2':
                            echo "
                            <div class='form-group'>
                                <label for=''>Dosis: </label>
                                <select name='dosis' class='form-select'>
                                    <option value='3'>Tercera Dosis</option>     
                                </select>
                            </div>
                            ";
                            break;
                        default:
                            echo "
                            <div class='form-group'>
                                <label for=''>Dosis: </label>
                                <select name='dosis' class='form-select' >
                                    
                                    <option value='1'>Primera Dosis</option>
                                        
                                </select>
                            </div>
                            ";
                            break;
                    }
                    
                    ?>

                    
                    
                    <form method="POST" action="consultas/creardosis.php">
                        <div class="form-group col-md-2">
                            <input type="hidden" class="form-control" readonly onmousedown="return false;" name="tarjeta" value="<?php echo $array['tar_id']?>">
                        </div>

                        <div class="form-group col-md-2">
                            <input type="hidden" class="form-control" readonly onmousedown="return false;" name="vacuna" value="<?php echo $array3['id_stvac']?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputZip">Vacuna</label>
                            <input type="text" class="form-control" readonly onmousedown="return false;" value="<?php echo $array4['nom_vac']?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputZip">Lote</label>
                            <input type="text" class="form-control" readonly onmousedown="return false;" value="<?php echo $array3['lote_stvac'] ?>">
                        </div>
                        <?php }  }  }}}?>
                        <div class="form-group col-md-2">
                            <div class="form-row">
                            
                                <label for="inputState">Fecha</label>
                                <input type="date"  name="fecha" readonly onmousedown="return false;" class="form-control" value="<?php echo date("Y-m-d"); ?>">
                            </div>
                            <br>
                            <div>
                                <button type="submit" class="btn btn-primary"> Guardar vacunación </button>
                            </div>  
                        </div>
                    </form>    
                </div>

                <div class="modal fade" id="tarjeta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Visualizar Detalles</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http%3A%2F%2Fwww.google.com%2F&choe=UTF-8" title="Link to Google.com" />
                                        </div>
                                        <form action="vertarjeta.php" method="POST">
                                            <input type="hidden" name="id-dni" id="ver-id">
                                            <div class="modal-footer center">
                                                <button type="submit" class="btn btn-primary">Ver <i class="fas fa-search fa-sm"></i></button> 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Realmente desea salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="index.html">Cerrar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="personal/vendor/jquery/jquery.min.js"></script>
    <script src="personal/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="personal/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="personal/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="personal/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="personal/js/demo/chart-area-demo.js"></script>
    <script src="personal/js/demo/chart-pie-demo.js"></script>

    <script>
        $('.editbtn').on('click',function () {
            $tr=$(this).closest('tr');
            var datos=$tr.children("td").map(function (){
                return $(this).text();
            });
            $('#update_id').val(datos[0]);
            $('#codigo').val(datos[1]);
            $('#cate').val(datos[2]);
            $('#descripcion').val(datos[3]);
            $('#cantidad').val(datos[4]);
            $('#precio_ini').val(datos[5]);
            $('#precio_fin').val(datos[6]);
        });
    </script>

    <script>
        $('.verbtn').on('click',function () {
            $tr=$(this).closest('tr');
            var datos=$tr.children("td").map(function (){
                return $(this).text();
            });
            $('#ver-id').val(datos[0]);
        });
    </script>

</body>

</html>