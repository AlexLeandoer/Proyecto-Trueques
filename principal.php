<?php include_once("header.php"); ?>
  <header id="header2">
    <!-- <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">Logo</a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacion" aria-controls="navegacion" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navegacion">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="#">Home</a>
          <a class="nav-item nav-link" href="#">Entra o regístrate</a>
          <a class="nav-item nav-link" href="#">Carrito</a>
        </div>
      </div>
    </nav> -->
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

  <section id="destacados">
      <div class="container">
        <div class="row">
            <div class="col-md">
                <h2>Usuarios destacados de la semana</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
        </div>
      </div>
  </section>

<?php include_once("footer.php"); ?>