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
  <section id="servicio">
    <div class="container my-5">
        <div class="row"> 
            <div class="col-md-7">
                <img src="http://placehold.it/750x500" alt="">
            </div>
            <div class="col-md-5" id="descripcion">
                <h3>Titulo de servicio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum eum, tempora amet illo accusantium impedit quidem atque sunt reiciendis suscipit hic dolorem molestias similique quos minima ipsam soluta, expedita ut ad explicabo accusamus distinctio architecto! Quasi distinctio totam culpa?</p>
                <ul>
                    <li>Lorem, ipsum.</li>
                    <li>Dolor sit amet</li>
                    <li>Consectetur</li>
                    <li>Adipisicing elit</li>
                </ul>
                <p class="user">Usuario: <a href="#">fulanito12</a></p>
                <button type="button" class="btn btn-dark btn-lg">Ofrecer intercambio</button>
            </div>
        </div>
    </div>

    <div class="container my-5" id="relacionados">
        <div class="row">
            <div class="col-12">
                <h3>Servicios relacionados</h3><hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3 mb-5 mb-md-0"><img src="http://placehold.it/500x300" alt=""></div>
            <div class="col-sm-6 col-md-3 mb-5 mb-md-0"><img src="http://placehold.it/500x300" alt=""></div>
            <div class="col-sm-6 col-md-3 mb-5 mb-md-0"><img src="http://placehold.it/500x300" alt=""></div>
            <div class="col-sm-6 col-md-3 mb-5 mb-md-0"><img src="http://placehold.it/500x300" alt=""></div>
        </div>
        <hr>
    </div>
  </section>
<?php include_once("footer.php"); ?>