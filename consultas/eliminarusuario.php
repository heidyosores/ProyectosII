<?php

include "db.php";

$id = $_POST["id"];
        $query = mysqli_query($conn, "DELETE FROM tbltipo_usuario where id_user ='$id'");
        if($query){
            $query1 = mysqli_query($conn, "DELETE FROM tblusuario where id_user ='$id'");
            echo "<script>
            window.close('eliminarusuario.php');
            window.open('/final/usuario.php');
            </script>";
                          
                    }
        else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
             }

     

?>