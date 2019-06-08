<?php
    include("conexion.php");
    session_start();

    if(isset($_COOKIE["Sesión"])){
        session_decode($_COOKIE["Sesión"]);
    }

    if(!isset($_SESSION["idUsuario"])){
        header("location:login.php");
    }

    if(empty($_GET['idUsuario'])){
        //Si viene del login
        $idUsuario = $_SESSION['idUsuario'];
        $consulta2 = "SELECT * FROM usuarios WHERE idUsuario = ?";
        $sentencia2 = $conexion->prepare($consulta2);
        $sentencia2->execute([$idUsuario]);
        $resultado2 = $sentencia2->fetch();
    }
    else{
        $id = $_GET['idUsuario'];
        $consulta = "SELECT * FROM usuarios WHERE idUsuario = ?";
        $sentencia = $conexion->prepare($consulta);
        $sentencia->execute([$idUsuario]);
        $resultado = $sentencia->fetch();
    }
    



    if(isset($_POST["cerrar"])){
        session_destroy();
        unset($_SESSION);
        if(isset($_COOKIE["Sesión"])){
            setcookie("Sesión", "", time() - 3600, "/");
            unset($_COOKIE);
        }
        header("location:login.php");
    }

?>

<?php include_once("header.php"); ?>
<header id="header2">
    <div class="logo">
        logo<!-- <img src="img/logo.png" alt=""> -->
    </div>
    <form class="form-inline d-flex justify-content-center buscador">
        <div class="icon-search">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
        </div>
    </form>

    <div class="botones">
    <form action="#" method="POST">
        <input type="submit" value="Cerrar sesión" name="cerrar">
    </form>
        <a href="#">Carrito</a>
    </div>
</header>

<section id="perfil">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="menu">
                    <h4>Perfil</h4>
                    <div class="enlaces">
                        <a href="#">Mis datos</a>
                        <a href="#">Opiniones</a>
                        <a href="#">Mensajes</a>
                        <a href="#">Pedidos</a>
                        <a href="#">Ofertas</a>
                    </div>
                    <h4>Servicios</h4>
                    <div class="enlaces">
                        <a href="#">Nuevo servicio</a>
                        <a href="#">Editar servicios</a>
                        <a href="#">Lorem ipsum</a>
                        <a href="#">Lorem ipsum</a>
                    </div>
                    <h4>Ayuda</h4>
                    <div class="enlaces">
                        <a href="#">Lorem ipsum</a>
                        <a href="#">Lorem ipsum</a>
                        <a href="#">Lorem ipsum</a>
                        <a href="#">Lorem ipsum</a>
                        <a href="#">Lorem ipsum</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h3>Mi cuenta - Bienvenido <?php echo $resultado2['nombreUsuario']?></h3>
                <div class="profile">
                    <div class="fondo-profile">
                        <img src="img/avatars/<?php echo $resultado2['avatarUsuario']?>" alt="Foto del usuario">
                    </div>
                    <div class="datos">
                        <div class="col-md-4"><h5>Pedidos</h5><p>N</p></div>
                        <div class="col-md-4 separadores"><h5>Servicios</h5><p>N</p></div>
                        <div class="col-md-4"><h5>Mensajes</h5><p>N</p></div>
                    </div>
                    <div class="servicios">
                        <div class="col-md-4"><img src="http://placehold.it/200x200" alt=""></div>
                        <div class="col-md-4 separadores"><img src="http://placehold.it/200x200" alt=""></div>
                        <div class="col-md-4"><img src="http://placehold.it/200x200" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once("footer.php"); ?>