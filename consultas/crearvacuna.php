<?php
include "db.php";
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$porcion = $_POST['porcion'];
$query = mysqli_query($conn, "INSERT INTO tblvacuna (id_vac, nom_vac, porc_vac) values ('$id', '$nombre', '$porcion')");

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