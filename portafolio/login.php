<?php

session_start();

// Se comprueba el post
if($_POST){
    // Si el usuario y contraseña corresponden
    if( ($_POST['usuario']=="fabiancz") && ($_POST['password']=="12345") ){

        // Se crea y se guarda usuario
        $_SESSION['usuario']="fabiancz";


        // Envia al usuario al index.php
        header("location:index.php");

    } else {
        // alerta
        echo "<script> alert('Usuario o contraseña incorrecta') </script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <br>
                <div class="card">
                    <br>
                    <div class="card-header">
                        Iniciar Sesion
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <label for="">Usuario:</label> <input class="form-control" type="text" name="usuario">
                            <label for="">Contraseña:</label> <input class="form-control" type="password" name="password">
                            <br>
                            <button type="submit" class="btn btn-success">Entrar al portafolio</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>

</body>

</html>