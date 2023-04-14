<?php
$nombre_formu= $_POST['nombre'];
$apellido_formu= $_POST['apellido'];
$correo_formu= $_POST['correo'];
$consulta_formu= $_POST['consulta'];

$datos_bd= mysqli_connect("localhost", "root", "", "actividadfinal") or exit ("No se puede conectar con la Base de Datos");

mysqli_query ($datos_bd, "INSERT INTO contacto VALUES (DEFAULT,'$nombre_formu', '$apellido_formu', '$correo_formu', '$consulta_formu')");
header("Location: index.php?ok");

?>
