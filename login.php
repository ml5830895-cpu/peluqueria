<?php
$username = $_POST["loginUsername"];
$password = $_POST["loginPassword"];
$xxx = $password;

session_start();

$admin = 2;
$activo = 1;

include_once("db/Conexion.php");

$sql = "SELECT * FROM `usuario` WHERE usuario='$username' and password ='$xxx'";

$c1 = 0;
$c2 = 0;
$c3 = 0;
$c4 = 0;

foreach ($dbh->query($sql) as $row) {
    $xusername = $row['usuario'];
    $xxxx = $row['password'];
    $rol = $row['rol'];
    $estado = $row['estado'];

    if ($username == $xusername) {
        $c1 = 1;
    }
    if ($xxx == $xxxx) {
        $c2 = 1;
    }
    if ($admin == $rol) {
        $c3 = 1;
    }
    if ($estado == $activo) {
        $c4 = 1;
    }
}

if ($c1 == 1 && $c2 == 1 && $c3 == 1 && $c4 == 1) {
    // Establecer variables de sesión
    $_SESSION["loggedIn"] = true;
    $_SESSION["username"] = $username;

    $message = "Inicio de sesión exitoso";
    $redirect = "admin.php";
} elseif ($c1 == 1 && $c2 == 1 && $c4 == 1) {
    // Establecer variables de sesión
    $_SESSION["loggedIn"] = true;
    $_SESSION["username"] = $username;

    $message = "Inicio de sesión exitoso";
    $redirect = "user.php";
} else {
    $message = "Usuario o contraseña incorrectos";
    $redirect = "login.html";
}

$c1 = 0;
$c2 = 0;
$c3 = 0;
$c4 = 0;

echo "<script>";
echo "alert('$message');";
echo "window.location.href = '$redirect';";
echo "</script>";
?>
