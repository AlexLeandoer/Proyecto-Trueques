<?php 
    $mensaje = "";
    include "conexion.php";

    session_start();

    if(isset($_COOKIE["Sesión"])){
        session_decode($_COOKIE["Sesión"]);
    }

    if(!isset($_SESSION["idUsuario"])){
        header("location:login.php");
    }
    
    if($_POST){
        $tituloServicio = $_POST['tituloServicio'];
        $descripcionServicio  = $_POST['descripcionServicio'];
        $nombre_categoria  = $_POST['nombre_categoria'];
        $fotoServicio = $_FILES['fotoServicio'];
        $idUsuario = $_SESSION['idUsuario'];

        $nombreAvatar = $fotoServicio["name"];
        $ruta = "img/services/". $nombreAvatar;
        $temporal= $fotoServicio["tmp_name"];

        $consulta1 = "SELECT * FROM servicios WHERE descripcionServicio = ?";
        $sentencia1=$conexion->prepare($consulta1);
        $sentencia1->execute([$descripcionServicio]);
        $resultado1 = $sentencia1->fetch();

        $consulta2 = "INSERT INTO servicios (idUsuario, tituloServicio, descripcionServicio, fotoServicio, nombre_categoria) VALUES (?,?,?,?,?)";

        $sentencia2=$conexion->prepare($consulta2);
        $resultado2 = $sentencia2->execute([$idUsuario,$tituloServicio,$descripcionServicio,$nombreAvatar,$nombre_categoria]);

        if($resultado2){
            move_uploaded_file($temporal,$ruta);
            $mensaje = '<div class="alert alert-success" role="alert">
                            Servicio insertado   
                        </div>';
        
        }    
    }
    
    
?>


<?php include("header.php");?>

<div class="container my-5">
    <div class="row my-5">
        <div class="offset-2 col-8">
            <h1>Añadir servicio</h1>
        </div>
    </div>

    <div class="row">
        <div class="offset-2 col-8">
            <?php  echo $mensaje; ?>
        </div>
    </div>

    <div class="row my-5">
        <div class="offset-2 col-8">
            <form action="#" method="post" enctype="multipart/form-data">
                <input type="text" class="form-control mb-4 p-4" name="tituloServicio" placeholder="Nombre del servicio" required>

                <textarea name="descripcionServicio" id="" cols="54" placeholder="Descripcion del servicio" rows="5"  class="form-control mb-4 p-4"></textarea>
                
                <input type="text" class="form-control mb-4 p-4" name="nombre_categoria" placeholder="Categoria del servicio" required>

                <label for="fotoServicio" class="btn btn-danger  px-5 py-3 mt-2">Subir foto</label>

                <input type="file" class="d-none" name="fotoServicio" placeholder="Foto servicio" required id="fotoServicio">

                <input  class="btn btn-primary px-5 py-3" type="submit" value="Insertar">
            </form>
        </div>
    </div>

</div>

<?php include("footer.php");?>