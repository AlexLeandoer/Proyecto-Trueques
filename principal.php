<?php
    require_once("conexion.php");

    //Para el usuario
    $consulta1 = $conexion->prepare("SELECT * FROM usuarios WHERE idUsuario = 1");
    $consulta1->execute();
    $resultado1 = $consulta1->fetch();

    //Para cargar las categorias
    $consulta2 = $conexion->prepare("SELECT * FROM servicios");
    $consulta2->execute();
    $resultado2 = $consulta2->fetchAll();

    //Para cargar usuarios con servicios
    $consulta3 = $conexion->prepare("SELECT * FROM usuarios_con_servicios");
    $consulta3->execute();
    $resultado3 = $consulta3->fetchAll();

?>

<?php include_once("header.php"); ?>
<header id="header2">
    <div class="logo">
        <a href="index.php">logo</a><!-- <img src="img/logo.png" alt=""> -->
    </div>
    <form class="form-inline d-flex justify-content-center buscador">
        <div class="icon-search">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
        </div>
    </form>

    <div class="botones">
        <a class="user-image rounded-circle" href="perfil.php?id=<?= $resultado1['idUsuario']?>">Perfil <img src="img/avatars/<?php echo $resultado1['avatarUsuario']?>" class="rounded-circle" alt=""></a>
        <a href="#">Carrito <img src="http://placehold.it/30x30" alt=""></a>
    </div>
</header>

<section id="categorias">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-10" id="nav-left">
                <p>Todas las categorías</p>
                <ul class="list-unstyled">
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=informatica')">Informática</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=electronica')">Electrónica</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=telefonia')">Telefonía</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=propuestas')">Propuestas</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=cocina')">Cocina</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=diseño')">Diseño</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=eventos')">Eventos</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#" onClick="$('#contenido').load('busqueda.php?nombre_categoria=otros')">Otros</a></li>
                </ul>
            </div>       
            <div class="col-md-9" id="contenido">
        
            </div>
        </div> 
        <!-- fin row -->
    </div>
    <!-- fin container -->
</section>
<div class="col-md-4" id="navegacion">
    <a href="#" id="destacados">Destacados</a>
    <a href="#" id="perfil">Perfil usuario</a>
    <a href="#" id="servicio">Servicio</a>
</div>


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