<?php
include "db.php";
$id = $_POST['id'];
$id_tipo = null;
$privilegio = $_POST['privilegio']; 
$nombre = $_POST['nombre'];
$direc = $_POST['direc'];
$pro = $_POST['prof'];
$tel = $_POST['telef'];
$login = $_POST['login'];
$pass = $_POST['pass'];
$query = mysqli_query($conn, "INSERT INTO tblusuario (id_user, nom_user, direc_user, profesion_user, tel_user, login_user, pass_user) values ('$id', '$nombre', '$direc', '$pro', '$tel', '$login', '$pass')");

if($query){
    $buscar = mysqli_query($conn, "SELECT MAX(id_user) AS usuario FROM tblusuario");
    while($mostrar = mysqli_fetch_array($buscar)) {
        $id_usuario = $mostrar['usuario'];
    }
    $query2 = mysqli_query($conn, "INSERT INTO tbltipo_usuario (id_tipuser, priv_tipuser, id_user) values ('$id_tipo', '$privilegio', '$id_usuario')");
    echo "<script>
    window.close('crearusuario.php');
    window.open('/final/usuario.php');

</script>";
                  
            }
else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);    
     }
?>