<?php
include "db.php";
$id = $_POST['id_citaupd'];
$punto_id = $_POST['punto'];
$fechas = $_POST['fecha'];
$horas = $_POST['hora'];
$dniciu = $_POST['dni'];
$query = mysqli_query($conn, "UPDATE tblcita SET ciu_dni = '$dniciu', fecha_cita = '$fechas', hora_cita = '$horas', punto_id = '$punto_id' WHERE id_cita = '$id'");

if($query){
    echo "<script>
    alert('Cita Generada Correctamente, continue con la ficha de consentimiento...');
    window.close('actcita.php');
    window.open('/final/consentimient.php');
    </script>";
                  
            }
else {
     echo "Error: " . $query . "<br>" . mysqli_error($conn);      
     }
?>