<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- DATATABLES -->
    <!--  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- SWEETALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: #E5E5E5;
        }

        th,
        td {
            padding: 0.4rem !important;
        }

        body>div {

            box-shadow: 10px 10px 8px #888888;
            border: 2px solid black;
            border-radius: 10px;
        }
        .center {
    text-align: center;
  }
    </style>
    <title>Paginacion</title>
</head>

<body>

    <div class="container" style="margin-top: 10px;padding: 5px">
        <table id="tablax" class="table table-striped table-bordered">
            <thead>
                
                <td>Usuarios</td>
                <td>Correo</td>
                <td>Estado</td>
            </thead>
            <tbody>
                <?php
                include_once("db/Conexion.php");

                $sql = "SELECT * FROM `usuario` WHERE rol='1'";

                foreach ($dbh->query($sql) as $row) {
                    $usuario = $row['usuario'];
                    $correo = $row['Correo'];
                    $estado = $row['estado'];
       

                    echo "<tr>";
                    echo "<td>" . $usuario . "</td>";
                    echo "<td>" . $correo . "</td>";
                    echo "<td>" . $estado . "</td>";



                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tablax').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Grupos: _MENU_ ",
                    info: "_START_ de _END_",
                    infoEmpty: "Por favor refresca la página.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron usuarios con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 400,
                lengthMenu: [
                    [10, 25, -1],
                    [10, 25, "Todos los usuarios"]
                ],
            });
        });

      
    </script>


</body>


</html>
