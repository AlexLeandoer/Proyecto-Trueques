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
        <a href="#">Login</a>
        <a href="#">Carrito</a>
    </div>
</header>

<section id="categorias">
    <div class="container">
        <div class="row">
            <div class="col-md-3" id="nav-left">
                <p>Todas las categorías</p>
                <ul class="list-unstyled">
                    <li><img href="icons/pc.svg"><a href="#">Informática</a></li>
                    <li><a href="#">Electrónica</a></li>
                    <li><a href="#">Telefonía</a></li>
                    <li><a href="#">Propuestas</a></li>
                    <li><a href="#">Cocina</a></li>
                    <li><a href="#">Diseño</a></li>
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Otros</a></li>
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
    <a href="#" id="home">Home</a>
    <a href="#" id="d">Destacados</a>
</div>

    


<?php include_once("footer.php"); ?>
<script>
    $(function(){
        $("#home").click(function(e){
            e.preventDefault();
            $('#contenido').load("servicio.html");
        });
        $("#d").click(function(e){
            e.preventDefault();
            $('#contenido').load("d.html");
        });
    });
</script>