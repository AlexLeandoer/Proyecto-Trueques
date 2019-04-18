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
            <div class="col-md-6 cajasintercambio">
                <h3>Estas intercambiando con Fulano</h3>
                <a href="#">Tus servicios</a>
                <a href="#">Sus servicios</a>
                <select name="categorias" id="categorias">
                    <option value ="" selected>Categorías</option>
                    <option value="informatica">Informatica</option>
                    <option value="electronica">Electronica</option>
                    <option value="cocina">Cocina</option>
                    <option value="propuestas">Propuestas</option>
                </select>
                <ul>
                    <li>servicio 1</li>
                    <li>servicio 2</li>
                    <li>servicio 3</li>
                    <li>servicio 4</li>
                </ul>
                <a href="#" class="btn btn-dark btn-lg">Añadir</a>

                <input type="text" placeholder="Añade un comentario...">
            </div>

            <div class="col-md-6 cajasintercambio">
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