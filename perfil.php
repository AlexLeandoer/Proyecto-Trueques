<?php
    include("conexion.php");
    session_start();

    if(isset($_COOKIE["Sesión"])){
        session_decode($_COOKIE["Sesión"]);
    }

    if(!isset($_SESSION["idUsuario"])){
        header("location:login.php");
    }

    $idUsuario = $_SESSION['idUsuario'];
    $consulta2 = "SELECT * FROM usuarios WHERE idUsuario = ?";
    $sentencia2 = $conexion->prepare($consulta2);
    $sentencia2->execute([$idUsuario]);
    $resultado2 = $sentencia2->fetch();

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
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <a class="navbar-brand" href="principal.php">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <form class="d-flex justify-content-center">
            <input class="form-control buscador" type="search" placeholder="Buscar..." aria-label="Search">
        </form> -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="user-image img-fluid " href="perfil.php"> 
                    <?= $resultado2['loginUsuario']?> 
                    <img src="img/avatars/<?php echo $resultado2['avatarUsuario']?>" class="" alt="">
                </a>
                </li>
                <li>
                    <form action="#" method="POST">
                        <input type="submit" value="Cerrar sesión" name="cerrar">
                    </form>
                </li>
            </ul>
            
        </div>
    </nav>
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