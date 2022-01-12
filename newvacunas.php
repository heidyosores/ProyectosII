<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vacunas</title>
    

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                
                <div class="sidebar-brand-text mx-3">Vacunatón  Perú 2021</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Administrador</span></a>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Usuarios
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="usuario.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Agregar</span>
                </a>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Vacunas
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="newvacunas.php">
                    <i class="fas fa-fw fa-notes-medical"></i>
                    <span>Ingresar nueva vacuna</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="vacunas.php">
                    <i class="fas fa-fw fa-clipboard-list"></i>
                    <span>Inventario</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="puntos.php">
                    <i class="fas fa-fw fa-street-view"></i>
                    <span>Puntos de vacunación</span>
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
                    <h1 class="text-center">Listado de Vacunas</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertar"> Nuevo </button>
                    <br><br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre Vacuna</th>
                                <th scope="col">Porción por vacuna</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include_once("consultas/consultarvacun.php");?>
                            <?php while($array = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $array['id_vac']?></td>
                                    <td><?php echo $array['nom_vac']?></td>
                                    <td><?php echo $array['porc_vac']?></td>
                                    <td> <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#editar">
                                        Editar </button></td>
                                    <td> <button type="button" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#eliminar">
                                        Eliminar </button></td> 
                                </tr>
                            <?php  }?>
                        </tbody>
                      </table>

                      <div class="modal fade" id="insertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nuevo ingreso de Vacuna</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="consultas/crearvacuna.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">   
                                                <input type="hidden" name="id"  class="form-control">
                                            </div>
                                            

                                            <div class="form-group">
                                                <label for="">Nombre de Vacuna: </label>
                                                <input type="text" name="nombre" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Porción por vacuna: </label>
                                                <input type="number" name="porcion" class="form-control">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secundary" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nuevo ingreso de Vacuna</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="consultas/editarvacuna.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">   
                                                <input type="hidden" name="update-id" id="update-id"  class="form-control">
                                            </div>
                                            

                                            <div class="form-group">
                                                <label for="">Nombre de Vacuna: </label>
                                                <input type="text" name="nombre" id="nombre" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Porción por vacuna: </label>
                                                <input type="number" name="porcion" id="porcion" class="form-control">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secundary" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h4>¿Desea Eliminar el ingreso de vacuna?</h4>
                                        <form action="consultas/eliminarvacuna.php" method="POST">
                                            <input type="hidden" name="id" id="delete-id">
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Si</button>
                                                <button type="button" class="btn btn-secundary" data-dismiss="modal">No</button>
                                            </div>
                                        </form>
                                    </div>
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
                    <a class="btn btn-primary" href="login.php">Cerrar</a>
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
            $('#update-id').val(datos[0]);
            $('#nombre').val(datos[1]);
            $('#porcion').val(datos[2]);
        });
    </script>

    <script>
        $('.deletebtn').on('click',function () {
            $tr=$(this).closest('tr');
            var datos=$tr.children("td").map(function (){
                return $(this).text();
            });
            $('#delete-id').val(datos[0]);
        });
    </script>

</body>

</html>