<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Recibe aritmeticos</title>
</head>

<body>
    <?php
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $dui = $_POST['dui'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];



    ?>
    <div class="container"><br>
        <table class="table table-striped table-hover table-bordered">
            <tbody>
                <tr>
                    <th>Código</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>DUI</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>

                </tr>
                <tr>
                    <td><?php echo $codigo ?></td>
                    <td><?php echo $nombre ?></td>
                    <td><?php echo $apellidos ?></td>
                    <td><?php echo $dui ?></td>
                    <td><?php echo $direccion ?></td>
                    <td><?php echo $telefono ?></td>

                </tr>
            </tbody>
        </table>
    </diV>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>

