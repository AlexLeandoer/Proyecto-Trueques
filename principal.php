<?php
    include "conexion.php";

    session_start();

    if(isset($_COOKIE["Sesión"])){
        session_decode($_COOKIE["Sesión"]);
    }

    if(!isset($_SESSION["idUsuario"])){
        header("location:login.php");
    }

    //Para el usuario
    $consulta1 = $conexion->prepare("SELECT * FROM usuarios WHERE idUsuario = ?");
    $consulta1->execute([$_SESSION["idUsuario"]]);
    $resultado1 = $consulta1->fetch();

    //Para cargar las categorias
    $consulta2 = $conexion->prepare("SELECT * FROM servicios");
    $consulta2->execute();
    $resultado2 = $consulta2->fetchAll();


?>

<?php include("header.php"); ?>
<header id="header2">
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <form class="d-flex justify-content-center">
            <input class="form-control buscador" type="search" placeholder="Buscar..." aria-label="Search">
        </form> -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="user-image" href="perfil.php?"> 
                    <?= $resultado1['loginUsuario']?> 
                    <img src="img/avatars/<?php echo $resultado1['avatarUsuario']?>" class="" alt="">
                </a>
                </li>
            </ul>
            
        </div>
    </nav>
</header>

<section id="categorias">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-10" id="nav-left">
                <p>Todas las categorías</p>
                <ul class="list-unstyled">
                    <li><img src="icons/pc.svg" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=informatica')">Informática</a></li>
                    <li><img src="icons/controller.svg" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=electronica')">Electrónica</a></li>
                    <li><img src="icons/phone.svg" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=telefonia')">Telefonía</a></li>
                    <li><img src="icons/chatting.svg" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=propuestas')">Propuestas</a></li>
                    <li><img src="icons/fork.svg" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=cocina')">Cocina</a></li>
                    <li><img src="icons/design.svg" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=diseño')">Diseño</a></li>
                    <li><img src="icons/events.svg" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=eventos')">Eventos</a></li>
                    <li><img src="icons/box.svg" alt=""><a href="#" onClick="$('#contenido').load('destacados.php')">Otros</a></li>
                </ul>
            </div>       
            <div class="col-md-9 overflow-auto" id="contenido">
        
            </div>
        </div> 
        <!-- fin row -->
    </div>
    <!-- fin container -->
</section>

<?php include_once("footer.php"); ?>
<script>
    $(function(){
        $("#destacados").click(function(e){
            e.preventDefault();
            $('#contenido').load("destacados.php");
        });
        $("#perfil").click(function(e){
            e.preventDefault();
            $('#contenido').load("perfilusuario.php");
        });
        $("#servicio").click(function(e){
            e.preventDefault();
            $('#contenido').load("servicio.php");
        });
        
    });
    
    
</script>