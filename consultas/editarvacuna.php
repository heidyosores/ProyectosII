<?php
include "db.php";
$id = $_POST['update-id'];
$nombre = $_POST['nombre'];
$porcion = $_POST['porcion'];

$query = mysqli_query($conn, "UPDATE tblvacuna set  nom_vac = '$nombre', porc_vac = '$porcion' where id_vac ='$id'");

if($query){
    echo "<script>
    window.close('crearvacuna.php');
    window.open('/final/newvacunas.php');

</script>";
                  
            }
else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);    
     }
?>