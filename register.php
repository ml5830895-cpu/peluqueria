<?php

$username = $_POST["registerUsername"];
$password = $_POST["registerPassword"];
$email = $_POST["registerEmail"];
$xxx = $password;
 $redirect = "login.html";

include_once("db/Conexion.php");

$sql = "INSERT INTO `usuario`(`id_usuario`, `Correo`, `usuario`, `password`,`rol`,`estado`) 
VALUES (NULL,'$email','$username','$xxx','1','1')";

if (!$dbh->query($sql)) {
    echo "<script>";
    
    echo "alert('Ha ocurrido un problema');";
    echo "window.location.href = '$redirect';";
    echo"</script>";
    

    
} else {

    echo "<script>";
    
    echo "alert('Registro exitoso');";
    echo "window.location.href = '$redirect';";
    echo"</script>";
}

?>
