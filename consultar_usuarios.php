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
    footer {
            margin-top: 50px;
            background-color: #333;
            color: #fff;
            padding: 10px;
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
    <p style="    padding: 30px;"></p>

<p class="center">
  <a href="admin.php" class="btn btn-primary">Volver al inicio</a>
</p>

  <iframe src="listar_usuarios.php" frameborder="0" style="width: 100%; height: 880px; display: block; margin: auto; background-color: #E5E5E5;"></iframe>





</div>
</body>

</html>
