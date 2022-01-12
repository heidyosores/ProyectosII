<?php
include "db.php";
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$lat = $_POST['latitud'];
$long = $_POST['longitud'];
$query = mysqli_query($conn, "INSERT INTO tblpuntovacunacion (id_pvac, nom_pvac, lat_pvac, lng_pvac) values ('$id', '$nombre', '$lat', '$long')");

if($query){
    return header("Location: /final/puntos.php"); 
                  
            }
else {
     echo "Error: " . $query . "<br>" . mysqli_error($conn); 
     }
?>