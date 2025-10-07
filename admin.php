<?php
session_start();

$username = $_SESSION["username"];

if(!isset($username)){
  header('location: index.html');
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
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
            width: 25%;
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
        cursor: pointer; /* Agregar esta línea para cambiar el cursor al pasar el ratón */
    }

    </style>

    <title>Pagina web basica</title>
</head>

<body>
    <div class="head">
        <nav class="navbar">

            <p>Bienvenido <?php echo $username; ?> al módulo de administrador</p>
        </nav>
    </div>
    <br><br><br><br><br><br><br>
    <img src="admin.png" alt="Descripción de la imagen" width="200">

    <H1>ADMIN</H1>


            <?php
        // Verificar si el usuario ha iniciado sesión
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true) {
            echo "<div class='btn-container'>
            
                        <a href='consultar_usuarios.php' class='btn'>Consultar usuarios</a>
                        <a href='consultar_citas.php' class='btn'>Consultar citas</a>
                        <a href='editar_datos_admin.php' class='btn'>Editar datos</a>
                        
                        <form method='POST' action=''>
                            <input type='submit' name='logout' value='Cerrar sesión' class='btn btn red'>
                        </form>
                    </div>";
        } else {
            echo "<a href='login.html' class='btn'>Iniciar sesión</a>";
        }

        // Cerrar sesión
        if (isset($_POST["logout"])) {
            session_unset();
            session_destroy();
            header("Location: login.html"); // Redireccionar al formulario de inicio de sesión después de cerrar sesión
            exit();
        }
        ?>





</div>
</body>

</html>
