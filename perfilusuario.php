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
    
?>

<section id="perfilotro">
    <div class="col-md-12">
    <h4 class="text-center"><?php echo $resultado['nombreUsuario'] ?></h4>
        <div class="profile">
            <div class="fondo-profile">
                <img src="img/avatars/<?php echo $resultado['avatarUsuario'] ?>" alt="">
            </div>
            <div class="nombre-user">
            
            </div>
            <div class="servicios">
                <div class="col-md-4"><img src="http://placehold.it/200x200" alt=""></div>
                <div class="col-md-4 separadores"><img src="http://placehold.it/200x200" alt=""></div>
                <div class="col-md-4"><img src="http://placehold.it/200x200" alt=""></div>
            </div>
            <div class="servicios">
                <div class="col-md-4"><img src="http://placehold.it/200x200" alt=""></div>
                <div class="col-md-4 separadores"><img src="http://placehold.it/200x200" alt=""></div>
                <div class="col-md-4"><img src="http://placehold.it/200x200" alt=""></div>
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