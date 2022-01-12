<?php
include "db.php";
$id = null;
$fecha = $_POST['fecha'];
$tarjeta = $_POST['tarjeta'];
$vacuna = $_POST['vacuna'];
$dosis = $_POST['dosis'];
$desc = 1;
$query = mysqli_query($conn, "INSERT INTO tbldosis (do_id, id_tar, fecha, id_stocvac, num_vac) values ('$id', '$tarjeta', '$fecha', '$vacuna', '$dosis')");
$consulta = mysqli_query($conn,"SELECT * FROM tblstockvacuna WHERE id_stvac = '$vacuna'");
while ($array = mysqli_fetch_array($consulta)) {
     $actual = $array['stock_stvac'];
     $an = $array['id_stvac'];
     $stock = $actual - $desc;
     $query1 = mysqli_query($conn, "UPDATE tblstockvacuna SET stock_stvac = '$stock' WHERE id_stvac = '$an'");
     if($query1){
          echo "<script>
                  alert('Vacuna Generada Correctamente!');
                  window.close('creardosis.php')
                  window.open('/final/tarjeta.php')
                  
                  </script>";
                        
                  }
      else {
          echo "Error: " . $query . "<br>" . mysqli_error($conn);     
           }
}
?>