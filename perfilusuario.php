<?php
    require_once("conexion.php");

    if(!isset($_GET['idUsuario'])){
        header("location:principal.php");
    }
    $idUsuario = $_GET['idUsuario'];
    $consulta = "SELECT * FROM usuarios WHERE idUsuario = ?";
    $sentencia = $conexion->prepare($consulta);
    $sentencia->execute([$idUsuario]);
    $resultado = $sentencia->fetch();

    //cargar servicios
    $consulta2 = "SELECT * FROM servicios WHERE idUsuario = ?";
    $sentencia2 = $conexion->prepare($consulta2);
    $sentencia2->execute([$idUsuario]);
    $resultado2 = $sentencia2->fetchAll();
    
?>

<section id="perfilotro">
    <div class="col-md-12">
    <h4 class="">Perfil de <?php echo $resultado['nombreUsuario'] ?></h4>
        <div class="profile">
            <div class="fondo-profile">
                <img src="img/avatars/<?php echo $resultado['avatarUsuario'] ?>" alt="">
            </div>
            <div class="servicios">
                <?php foreach ($resultado2 as $fila) { ?>
                    <div class="col-md-4">
                        <a href="servicio.php?idServicio=<?php echo $fila['idServicio']?>">
                            <img src="img/services/<?php echo $fila['fotoServicio']?>" alt="">
                            
                        </a>
                    </div>
                
                <?php } ?>
            </div>
           
            <div class="opiniones">
                <!-- <h4>Opiniones</h4> -->
                <div class="col-md-4 opinion">
                    <img class="foto-perfil" src="http://placehold.it/50x50" alt="">
                    <div class="rating">
                        <img src="http://placehold.it/30x30" alt="">
                        <img src="http://placehold.it/30x30" alt="">
                        <img src="http://placehold.it/30x30" alt="">
                        <img src="http://placehold.it/30x30" alt="">
                    </div>
                </div>
                <div class="col-md-4 opinion">
                    <img class="foto-perfil" src="http://placehold.it/50x50" alt="">
                    <div class="rating">
                        <img src="http://placehold.it/30x30" alt="">
                        <img src="http://placehold.it/30x30" alt="">
                        <img src="http://placehold.it/30x30" alt="">
                        <img src="http://placehold.it/30x30" alt="">
                    </div>
                </div>
                <div class="col-md-4 opinion">
                    <img class="foto-perfil" src="http://placehold.it/50x50" alt="">
                    <div class="rating">
                        <img src="http://placehold.it/30x30" alt="">
                        <img src="http://placehold.it/30x30" alt="">
                        <img src="http://placehold.it/30x30" alt="">
                        <img src="http://placehold.it/30x30" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>