<?php

include 'db.php';

$id = $_POST["id"];
$vacuna = $_POST["vacuna"];
$punto = $_POST["punto"];
$fechaPedido = $_POST["fechaPedido"];
$pedido = $_POST["pedido"];

        $query = mysqli_query($conn, "INSERT INTO tblpedido (ped_id, vac_id, punto_id, fecha_ped, cantidad_ped) values ('$id', '$vacuna', '$punto','$fechaPedido', '$pedido')");
        if($query){
            echo "<script>
            window.close('estado.php');
            window.open('/final/pedido.php');
            </script>";
                          
                    }
        else {
                     
             }

    //}

?>