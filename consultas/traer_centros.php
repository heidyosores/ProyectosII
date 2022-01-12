<?php

include "db.php";

if(isset($_GET["lat"])){
  $lat = $_GET["lat"];
}

if(isset($_GET["lng"])){
  $lng = $_GET["lng"];
}


$sql = mysqli_query($conn, "SELECT * FROM tblpuntovacunacion");
$array = Array(	"puntos" => Array());
while ($fila = mysqli_fetch_assoc($sql)) {
  $id = $fila["id_pvac"];
  $citas = mysqli_query($conn, "SELECT count(id_cita) FROM tblcita WHERE punto_id='$id'");
  $stock = mysqli_query($conn, "SELECT * FROM tblstockvacuna WHERE punto_id='$id'");
  while ($fila2 = mysqli_fetch_assoc($citas)){
    while ($fila3 = mysqli_fetch_assoc($stock)){
      if($fila3["stock_stvac"] == '' ){
            $fila3["stock_stvac"] = 0;
      }
    array_push($array["puntos"], Array(
      "id" => $fila["id_pvac"],
      "nombre" => $fila["nom_pvac"],
      "gps" => Array("lat" => $fila["lat_pvac"], "lng" =>  $fila["lng_pvac"]),
      "nvacunas" => $fila3["stock_stvac"],
      "nlugares" => $fila2["count(id_cita)"]));
    }
  }
  
}


header('Content-type: application/json');
echo json_encode($array);
?>