<?php include_once("header.php"); ?>
  <header id="header2">
    <div class="logo">
        logo<!-- <img src="img/logo.png" alt=""> -->
    </div>
    <form class="form-inline d-flex justify-content-center buscador">
        <div class="icon-search">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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
              <div class="col-md-3 ">
                  <p>Todas las categorías</p>
                  <ul class="list-unstyled">
                      <li><a href="#">Informática</a></li>
                      <li><a href="#">Electrónica</a></li>
                      <li><a href="#">Telefonía</a></li>
                      <li><a href="#">Propuestas</a></li>
                      <li><a href="#">Cocina</a></li>
                      <li><a href="#">Diseño</a></li>
                      <li><a href="#">Eventos</a></li>
                      <li><a href="#">Otros</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </section>

  <section class="container">
      <div class="col-md-4" id="navegacion">
        <a href="#" id="home">Home</a>
        <a href="#" id="destacados">Destacados</a>
      </div>
      <div class="col-md-8" id="contenido">
      </div>
  </section>

<?php include_once("footer.php"); ?>
<script>
    $(function(){
        $("#home").click(function(e){
            e.preventDefault();
            $('#contenido').load("servicio.html");
        });
        $("#destacados").click(function(e){
            e.preventDefault();
            $('#contenido').load("destacados.html");
        });
    });
    
</script>