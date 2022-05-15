<?php include("header.php"); ?>
<?php include("conexion.php") ?>
<?php

if($_POST) {

    $nombre= $_POST['nombre'];
    $descripcion= $_POST['descripcion'];

    $fecha= new DateTime();
    $imagen= $fecha->getTimestamp()."_".$_FILES['archivo']['name'];

    $imagen_temp= $_FILES['archivo']['tmp_name'];

    move_uploaded_file($imagen_temp, "imagenes/".$imagen);

    // Instancia de conexion
    $objConexion= new conexion();

    // Se insertan datos en tabla de base de datos
    $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";

    // Ejecucion insert
    $objConexion->ejecutar($sql);

    header("location:portafolio.php");
}

if($_GET){

    $id=$_GET['borrar'];
    $objConexion= new conexion();

    $imagen= $objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);
    unlink("imagenes/".$imagen[0]['imagen']);

    $sql="DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id;
    $objConexion->ejecutar($sql);
    header("location:portafolio.php");
}

$objConexion= new conexion();
$proyectos= $objConexion->consultar("SELECT * FROM `proyectos`");

?>

<br>

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        Nombre del proyecto: <input require class="form-control" type="text" name="nombre">
                        <br>
                        Imagen del proyecto: <input require class="form-control" type="file" name="archivo">
                        <br>
                        Descripción:
                        <textarea require class="form-control" name="descripcion" id="" rows="3"></textarea>
                        <br>
                        <input type="submit" class="btn btn-success" value="Enviar proyecto">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($proyectos as $proyecto) { ?>
                        <tr>
                            <td scope="row"><?php echo $proyecto['id']; ?></td>
                            <td><?php echo $proyecto['nombre']; ?></td>
                            <td>
                                <img width="100" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="">
                            </td>
                            <td><?php echo $proyecto['descripcion']; ?></td>
                            <td><a name="" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>








<?php include("footer.php"); ?>