<?php include_once("header.php"); ?>

<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegacion" aria-controls="navegacion" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navegacion">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link btn btn-dark" href="login.php">Entra o regístrate</a>
        </div>
      </div>
    </nav>
  </header>

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 textobanner">
                    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates maxime praesentium aliquid molestias officiis alias quia assumenda magnam esse deleniti?</p>
                    <a href="registro.php" class="btn btn-dark">únete</a>
                </div>
        
                <div id="carrusel" class="carousel slide col-md-6" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="img/index.jpeg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="http://placehold.it/650x950" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="http://placehold.it/650x950" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carrusel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carrusel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="http://placehold.it/800x600" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-danger btn-lg">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="http://placehold.it/800x600" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-danger btn-lg">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="http://placehold.it/800x600" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-danger btn-lg">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonios" class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <div class="jumbotron animated">
                    <h1 class="display-4">Hello, world!</h1>
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <hr class="my-4">
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">

        <form class="container">
        <h3 class="text-center p-4">Contáctanos</h3>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>
            <textarea cols="54" placeholder="Comentanos algo" rows="5"  class="form-control mb-4 p-4"></textarea>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Deseo recibir emails de novedades
                </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </section>
<?php include_once("footer.php"); ?>