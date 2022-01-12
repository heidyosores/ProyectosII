<?php

include "db.php";
$id = $_POST['update-id'];
$nombre = $_POST['nombre'];
$direc = $_POST['direc'];
$pro = $_POST['prof'];
$tel = $_POST['telef'];
$login = $_POST['login'];
$pass = $_POST['pass'];
$privilegio = $_POST['privilegio'];

$query = mysqli_query($conn, "UPDATE tblusuario set  nom_user = '$nombre', direc_user = '$direc', profesion_user = '$pro', tel_user = '$tel', login_user = '$login', pass_user = '$pass' where id_user ='$id'");
        if($query){
            $query1 = mysqli_query($conn, "UPDATE tbltipo_usuario set  priv_tipuser = '$privilegio' where id_user ='$id'");
            echo "<script>
            window.close('editarusuario.php');
            window.open('/final/usuario.php');
            </script>";
                          
                    }
        else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
             }
?>