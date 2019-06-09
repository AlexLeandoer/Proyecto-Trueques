<?php
    require_once("conexion.php");

    if(!isset($_GET['nombre_categoria'])){
        header("location:principal.php");
    }
    $nombre_categoria = $_GET['nombre_categoria'];
    $consulta = "SELECT * FROM servicios WHERE nombre_categoria = ?";
    $sentencia = $conexion->prepare($consulta);
    $sentencia->execute([$nombre_categoria]);
    $resultado = $sentencia->fetchAll();
    
?>
<?php include_once("header.php"); ?>
<div class="container" id="busqueda">
    <?php
        foreach ($resultado as $fila){  
    ?>
    <div class="row item_busqueda">
        <div class="col-md-3">
            <img src="img/services/<?php echo $fila['fotoServicio']?>" alt="">
        </div>
        <div class="col-md-8">
            <h4><?php echo $fila['tituloServicio']?> <img src="http://placehold.it/20x20" alt=""></h4>
            <p><?php echo $fila['descripcionServicio']?></p>
            <?php 
                 $id_servicio = $fila['idServicio'];
                 $consulta2 = "SELECT * FROM usuarios WHERE usuarios.idUsuario = (SELECT servicios.idUsuario FROM servicios WHERE idServicio = ?)";
                 $sentencia2 = $conexion->prepare($consulta2);
                 $sentencia2->execute([$id_servicio]);
                 $resultado2 = $sentencia2->fetch();
            ?>
            <p class="user">Usuario: <img src="http://placehold.it/20x20" alt="">
            <a href="#" onclick="$('#contenido').load('perfilusuario.php?idUsuario=<?php echo $resultado2['idUsuario'] ?>')">
            <?php echo $resultado2['nombreUsuario'] ?></a>
            <a href="#" onclick="$('#contenido').load('servicio.php?idServicio=<?= $fila['idServicio']?>')" class="btn btn-primary">Leer más</a></p>
        </div>
    </div>
    <?php }?>
</div>
