<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login/css/login.css">
    <link rel="stylesheet" href="login/css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
   <form action="consultas/validaringreso.php" method="post">
   <h1 class="animate__animated animate__backInLeft">Bienvenidos al sistema de Salud</h1>
   <p>Usuario: <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
   <p>Contraseña: <input type="password" placeholder="ingrese su contraseña" name="pass"></p>
   <input type="submit" value="Ingresar">
   
   </form> 
</body>
</html>