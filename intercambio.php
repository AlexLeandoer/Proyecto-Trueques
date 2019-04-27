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
    
    <section class="container" id="intercambio">
        <div class="row">
            <div class="col-md-5 cajasintercambio">
                <h3>Estas intercambiando con Fulano</h3>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-secondary active">Tus servicios</button>
                    <button type="button" class="btn btn-secondary">Sus servicios</button>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="scategorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorías
                    </button>
                    <div class="dropdown-menu" aria-labelledby="scategorias">
                        <a class="dropdown-item" href="#">Informatica</a>
                        <a class="dropdown-item" href="#">Electronica</a>
                        <a class="dropdown-item" href="#">Cocina</a>
                        <a class="dropdown-item" href="#">Propuestas</a>
                    </div>
                </div>
                
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Servicio 1</a>
                    <a href="#" class="list-group-item list-group-item-action">Servicio 2</a>
                    <a href="#" class="list-group-item list-group-item-action">Servicio 3</a>
                    <a href="#" class="list-group-item list-group-item-action">Servicio 4</a>
                </div>
                <a href="#" class="btn btn-dark btn-lg">Añadir</a>

                <input type="text" placeholder="Añade un comentario...">
            </div>

            <div class="col-md-5 cajasintercambio">
                <h3>Intercambio</h3>
                <h4><img src="">Tu ofreces:</h4>
                <div>
                    <img src="" alt="">
                    <p>Servicio 4</p>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <h4><img src="">El ofrece:</h4>
                <div>
                    <img src="" alt="">
                    <p>Servicio 3</p>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <a href="#" class="btn btn-dark btn-lg">Completar</a>
            </div>
        </div>
    </section>


<?php include_once("footer.php"); ?>