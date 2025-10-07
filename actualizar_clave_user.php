<?php
session_start();

$username = $_SESSION["username"];

if(!isset($username)){
  header('location: index.html');
}


include_once("db/Conexion.php");




$password = $_POST["password"];
$password2 = $_POST["password2"];




 $redirect = "editar_datos_user.php";
 $redirect1 = "editar_clave_user.php";


if ($password != $password2){
  echo "<script>";
    
  echo "alert('Las contraseñas no coinciden');";
  echo "window.location.href = '$redirect1';";
  echo"</script>";
}else{




 $sql = "UPDATE usuario SET password='$password' WHERE usuario='$username'";

if (!$dbh->query($sql)) {
    echo "<script>";
    
    echo "alert('Ha ocurrido un problema');";
    echo "window.location.href = '$redirect';";
    echo"</script>";
    

    
} else {

    echo "<script>";
    
    echo "alert('Contraseña actualizado exitosamente');";
    echo "window.location.href = '$redirect';";
    echo"</script>";
}
}


?>
