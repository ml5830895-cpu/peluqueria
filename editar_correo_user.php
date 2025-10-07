<?php
session_start();

$username = $_SESSION["username"];

if(!isset($username)){
  header('location: index.html');
}


include_once("db/Conexion.php");
$sql ="SELECT Correo FROM usuario WHERE usuario='$username'";

foreach ($dbh->query($sql) as $row) {

    $correo_usuario = $row['Correo'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="stylee.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .head {
            background-color: #333;
            padding: 10px;
            display: flex;
            justify-content: center;
        }

        .navbar {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            background-color: transparent;
            border: none;
            font-size: 16px;
            cursor: pointer;
            padding: 10px;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        .navbar a:hover {
            background-color: #555;
        }

        .navbar .right {
            margin-left: auto;
        }

        .content {
            text-align: center;
            padding: 50px;
        }

        .title {
            font-size: 24px;
            margin-bottom: 20px;
        }

        footer {
            margin-top: 50px;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        footer p {
            margin: 0;
        }

        .btn {
            background-color: #555;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }

        .btn:hover {
            background-color: #333;
        }

        .btn-container {
            display: flex;
            margin: auto;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .btn-container .btn {
            background-color: #555;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .btn-container .btn:hover {
            background-color: #333;
        }

        .btn.red {
            background-color: #ff0000;
            cursor: pointer;
        }

        footer {
            margin-top: 50px;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        .formulario__input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .formulario__input:focus {
            outline: none;
            border-color: #28a745;
            box-shadow: 0 0 5px #28a745;
        }
    </style>

    <title>Pagina web basica</title>
</head>

<body>
    <div class="head">
        <nav class="navbar">
            <p>Bienvenido <?php echo $username; ?></p>
        </nav>
    </div>

    <p style="padding: 30px;"></p>

    <p class="center">
        <a href="user.php" class="btn btn-primary">Volver al inicio</a>
    </p>

    <h3 class="text-center py-3"><b>TUS DATOS</b></h3>
    <img src="11pp.png" alt="Descripción de la imagen" width="200">

    <!-- Grupo: Nombre -->

    <div class="btn-container">
        <h3 class="text-center py-3"><b>Digita tu nuevo correo electrónico</b></h3>

        <form method="POST" action="actualizar_correo_user.php" class="text-center" id="formulario">
        <p style="padding: 0px;"></p>

                    <input type="email" class="formulario__input" name="correo" id="correo" placeholder="Escribe tu nuevo correo" minlength="4" maxlength="60" required>
                    <p style="padding: 0px;"></p>

            <div class="formulario__grupo formulario__grupo-btn-enviar py-4">
                <button type="submit" class="btn btn-success my-2 my-sm-0" id="btn-actualizar-correo">Actualizar Correo</button>
            </div>
        </form>
    </div>

</body>

</html>
