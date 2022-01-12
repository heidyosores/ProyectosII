<?php

include "db.php";

$id = $_POST["id"];
$vacuna = $_POST["vacuna"];
$lote = $_POST["lote"];
$cantidad = $_POST["cantidad"];
$punto = $_POST["punto"];
$queryq = mysqli_query($conn,"SELECT * FROM tblvacuna WHERE id_vac = '$vacuna'");
while ($valores = mysqli_fetch_array($queryq)) {
    $porcion = $valores['porc_vac'];
    $stock = $cantidad * $porcion;

        $query = mysqli_query($conn, "UPDATE tblstockvacuna set  vac_id = '$vacuna', lote_stvac = '$lote', cantidad_stvac = '$cantidad', stock_stvac = '$stock', punto_id = '$punto' where id_stvac ='$id'");
        if($query){
            echo "<script>
            window.close('editarstockvacuna.php');
            window.open('/final/vacunas.php');
            </script>";
                          
                    }
        else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
             }

     }

?>