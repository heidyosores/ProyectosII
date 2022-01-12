<?php
include "db.php";
$id = null;
$punto_id = $_GET['centro_id'];
$fechas = null;
$horas = null;
$dniciu = $_GET['dni'];
$query = mysqli_query($conn, "INSERT INTO tblcita (id_cita, ciu_dni, fecha_cita, hora_cita, punto_id) values ('$id', '$dniciu', '$fechas', '$horas', '$punto_id')");

if($query){
    echo "<script>
    window.close('crearcita.php');
    window.open('/final/reservar_cita.php');

</script>";
                  
            }
else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);     
     }
?>