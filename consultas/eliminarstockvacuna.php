<?php

include "db.php";

$id = $_POST["id"];

        $query = mysqli_query($conn, "DELETE FROM tblstockvacuna where id_stvac ='$id'");
        if($query){
            echo "<script>
            window.close('eliminarstockvacuna.php');
            window.open('/final/vacunas.php');
            </script>";
                          
                    }
        else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
             }

     

?>