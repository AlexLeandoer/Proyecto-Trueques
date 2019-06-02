<?php
    require_once("conexion.php");

    if(!isset($_GET['idServicio'])){
        header("location:principal.php");
    }
    $idServicio = $_GET['idServicio'];
    $consulta = "SELECT * FROM servicios WHERE idServicio = ?";
    $sentencia = $conexion->prepare($consulta);
    $sentencia->execute([$idServicio]);
    $resultado = $sentencia->fetch();
    
?>
  <section id="servicio">
    <div class="container my-5">
        <div class="row"> 
            <div class="col-md-7">
                <img src="img/services/<?php echo $resultado['fotoServicio']?>" alt="">
                <!-- <img src="http://placehold.it/750x500" alt=""> -->
            </div>
            <div class="col-md-5" id="descripcion">
                <h3><?php echo $resultado['tituloServicio']?></h3>
                <p><?php echo $resultado['descripcionServicio']?></p>
                <!-- <ul>
                    <li>Lorem, ipsum.</li>
                    <li>Dolor sit amet</li>
                    <li>Consectetur</li>
                    <li>Adipisicing elit</li>
                </ul> -->
                <p class="user">Usuario: <a href="#"><img src="http://placehold.it/20x20" alt=""> fulanito12</a></p>
                <button type="button" class="btn btn-dark btn-lg">Ofrecer intercambio</button>
            </div>
        </div>
    </div>

    <div class="container my-5" id="relacionados">
        <div class="row">
            <div class="col-12">
                <h3>Servicios relacionados</h3><hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3 mb-5 mb-md-0"><img src="http://placehold.it/500x300" alt=""></div>
            <div class="col-sm-6 col-md-3 mb-5 mb-md-0"><img src="http://placehold.it/500x300" alt=""></div>
            <div class="col-sm-6 col-md-3 mb-5 mb-md-0"><img src="http://placehold.it/500x300" alt=""></div>
            <div class="col-sm-6 col-md-3 mb-5 mb-md-0"><img src="http://placehold.it/500x300" alt=""></div>
        </div>
        <hr>
    </div>
  </section>
<!-- <?php include_once("footer.php"); ?> -->