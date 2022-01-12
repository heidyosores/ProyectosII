<?php
include "db.php";
$query = mysqli_query($conn, "SELECT t.id_user, nom_user, direc_user, profesion_user, tel_user, login_user, pass_user, priv_tipuser
FROM tblusuario u, tbltipo_usuario t
WHERE t.id_user = u.id_user");
?>