<?php
include "db.php";
$id = null;
$dni = $_POST['dni'];
$punto = $_POST['punto'];
$grabacion = $_POST['audio'];
$query = mysqli_query($conn, "INSERT INTO tblcompromiso (id_com, dni_ciu, audio_com) values ('$id', '$dni', '$grabacion')");
$query1 = mysqli_query($conn, "INSERT INTO tbltarjeta (tar_id, dni_pac, punto_id) values ('$id', '$dni', '$punto')");

if($query){
    echo "<script>
            alert('Compromiso guardado Correctamente, acerquese con doble mascarilla a su centro de vacunacion elegido!');
            window.close('crearconsentimient.php')
            window.open('/final/cupo_generado.php')
            
            </script>";
                  
            }
else {
     echo "Error: " . $query . "<br>" . mysqli_error($conn);
     }
?>