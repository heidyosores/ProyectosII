<?php
include "db.php";
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$consulta = mysqli_query($conn,"SELECT id_user FROM tblusuario where login_user = '$usuario'and pass_user='$pass'");
$nr = mysqli_num_rows($consulta);

if ($nr == 1)
{
  while($array = mysqli_fetch_array($consulta)){
    $user = $array['id_user'];
      $validar = mysqli_query($conn, "SELECT priv_tipuser FROM tbltipo_usuario where id_user = '$user'");
      while($tipo = mysqli_fetch_array($validar)){
        $tipo_user = $tipo['priv_tipuser'];
        if($tipo_user == 1){
          return header("Location: /final/admin.php");
        }
        else if ($tipo_user == 2) {
          return header("Location: /final/personal.php");
        }
        else {
          echo "Error: " . $query . "<br>" . mysqli_error($conn); 
          }
    }
    
    
    
}
}
else if ($nr == 0)
    {
      echo "<script>
      alert('Usuario o Contraseña Incorrecto');
      window.close('validaringreso.php');
      window.open('/final/login.php');
     </script>";
    }

?>

