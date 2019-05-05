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
        <a href="#">Login <img src="http://placehold.it/30x30" alt=""></a>
        <a href="#">Carrito <img src="http://placehold.it/30x30" alt=""></a>
    </div>
</header>

<section id="categorias">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-10" id="nav-left">
                <p>Todas las categorías</p>
                <ul class="list-unstyled">
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#">Informática</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#">Electrónica</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#">Telefonía</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#">Propuestas</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#">Cocina</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#">Diseño</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#">Eventos</a></li>
                    <li><img src="http://placehold.it/30x30" alt=""><a href="#">Otros</a></li>
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
    <a href="#" id="home">Buscar</a>
    <a href="#" id="destacados">Destacados</a>
    <a href="#" id="perfil">Perfil usuario</a>
    <a href="#" id="servicio">Servicio</a>
</div>


<?php include_once("footer.php"); ?>
<script>
    $(function(){
        $("#home").click(function(e){
            e.preventDefault();
            $('#contenido').load("busqueda.php");
        });
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