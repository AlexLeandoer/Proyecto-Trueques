<?php
    require_once("conexion.php");

    //Query usuarios
    $consulta1 = $conexion->prepare("SELECT * FROM usuarios ORDER BY idUsuario DESC");
    $consulta1->execute();
    $resultados1 = $consulta1->fetchAll();

    //Query servicios
    $consulta2 = $conexion->prepare("SELECT * FROM servicios ORDER BY idServicio DESC");
    $consulta2->execute();
    $resultados2 = $consulta2->fetchAll();

?>

<?php include("header.php") ?>

<!-- Usuarios -->
<div class="container my-5">
    <div class="row  my-5">
        <div class="col-12 my-5">
            <h2>Backend Usuarios</h2>
        </div>

        <div class="col-md-12 ">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">
                            <a href="addUsuario.php" class="btn btn-primary"><i class="fa fa-plus"></i>  Insertar</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    foreach($resultados1 as $fila){
                ?>
                    <tr>
                        <td><?php echo $fila['idUsuario'] ?></td>
                        <td><?php echo $fila['nombreUsuario'] ?></td>
                        <td><img src="img/avatars/<?php echo $fila['avatarUsuario'] ?>" width="100" alt=""></td>
                        <td>
                        <a href="updateUsuario.php?idUsuario=<?php echo $fila['idUsuario'] ?>" class="btn btn-success"><i class="fa fa-pencil"></i> Editar</a>
                        <a  href="#" onClick="borradoUsuario(<?php echo $fila['idUsuario'] ?>)" class="btn btn-danger"><i class="fa fa-trash"></i> Borrar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
           
    </div>
</div>

<!-- Servicios -->
<div class="container my-5">
    <div class="row  my-5">
        <div class="col-12 my-5">
            <h2>Backend Servicios</h2>
        </div>

        <div class="col-md-12 ">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Foto</th>
                        <th scope="col">
                            <a href="addServicio.php" class="btn btn-primary"><i class="fa fa-plus"></i>  Insertar</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    foreach($resultados2 as $fila){
                ?>
                    <tr>
                        <td><?php echo $fila['idServicio'] ?></td>
                        <td><?php echo $fila['tituloServicio'] ?></td>
                        <td><img src="img/services/<?php echo $fila['fotoServicio'] ?>" width="100" alt=""></td>
                        <td>
                        <a href="updateServicio.php?idServicio=<?php echo $fila['idServicio'] ?>" class="btn btn-success"><i class="fa fa-pencil"></i> Editar</a>
                        <a  href="#" onClick="borradoServicio(<?php echo $fila['idServicio'] ?>)" class="btn btn-danger"><i class="fa fa-trash"></i> Borrar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
           
    </div>
</div>

<?php include("footer.php") ?>