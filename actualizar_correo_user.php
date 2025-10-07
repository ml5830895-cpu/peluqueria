<?php
session_start();

$username = $_SESSION["username"];

if(!isset($username)){
  header('location: index.html');
}


include_once("db/Conexion.php");




$email = $_POST["correo"];

 $redirect = "editar_datos_user.php";









 $sql = "UPDATE usuario SET Correo='$email' WHERE usuario='$username'";

if (!$dbh->query($sql)) {
    echo "<script>";
    
    echo "alert('Ha ocurrido un problema');";
    echo "window.location.href = '$redirect';";
    echo"</script>";
    

    
} else {

    echo "<script>";
    
    echo "alert('Correo actualizado exitosamente');";
    echo "window.location.href = '$redirect';";
    echo"</script>";
}



?>
