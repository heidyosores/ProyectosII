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

        $query = mysqli_query($conn, "INSERT INTO tblstockvacuna (id_stvac, vac_id, lote_stvac, cantidad_stvac, stock_stvac, punto_id) values ('$id', '$vacuna', '$lote', '$cantidad', '$stock', '$punto')");
        if($query){
            echo "<script>
            window.close('crearstockvacuna.php');
            window.open('/final/vacunas.php');
            </script>";
                          
                    }
        else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);      
             }

     }

?>