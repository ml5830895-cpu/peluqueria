<?php

include_once("db/Conexion.php");
session_start();

$username = $_SESSION["username"];

if(!isset($username)){
  header('location: index.html');
}

$sql ="SELECT id_usuario FROM usuario WHERE  usuario='$username'";

foreach ($dbh ->query($sql) as $row) 
{

    $id_usuario = $row['id_usuario'];
}





if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $servicio = $_POST["servicio"];
    $fecha = $_POST["password2"];




    $redirect = "user.php";

 
    
    $sql = "INSERT INTO `citas`(`id_citas`, `id_usuario`, `id_servicio`, `estado_cita`, `fecha_cita`) 
    VALUES (NULL,'$id_usuario','$servicio','1','$fecha')";
    
    if (!$dbh->query($sql)) {
        echo "<script>";
        
        echo "alert('Ha ocurrido un problema');";
        echo "window.location.href = '$redirect';";
        echo"</script>";
        
    
        
    } else {
    
        echo "<script>";
        
        echo "alert('Cita registrada exitosamente');";
        echo "window.location.href = '$redirect';";
        echo"</script>";
    }


}
?>
