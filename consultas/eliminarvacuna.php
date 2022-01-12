<?php

include "db.php";

$id = $_POST["id"];

        $query = mysqli_query($conn, "DELETE FROM tblvacuna where id_vac ='$id'");
        if($query){
            echo "<script>
            window.close('eliminarvacuna.php');
            window.open('/final/newvacunas.php');
            </script>";
                          
                    }
        else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
             }

     

?>