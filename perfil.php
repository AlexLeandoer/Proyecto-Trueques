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

<section id="perfil">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="menu">
                    <h4>Perfil</h4>
                    <div class="enlaces">
                        <a href="#">Mis datos</a>
                        <a href="#">Opiniones</a>
                        <a href="#">Mensajes</a>
                        <a href="#">Pedidos</a>
                        <a href="#">Ofertas</a>
                    </div>
                    <h4>Servicios</h4>
                    <div class="enlaces">
                        <a href="#">Nuevo servicio</a>
                        <a href="#">Editar servicios</a>
                        <a href="#">Lorem ipsum</a>
                        <a href="#">Lorem ipsum</a>
                    </div>
                    <h4>Ayuda</h4>
                    <div class="enlaces">
                        <a href="#">Lorem ipsum</a>
                        <a href="#">Lorem ipsum</a>
                        <a href="#">Lorem ipsum</a>
                        <a href="#">Lorem ipsum</a>
                        <a href="#">Lorem ipsum</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h3>Mi cuenta</h3>
                <div class="profile">
                    <div class="fondo-profile">
                        <img src="http://placehold.it/70x70" alt="">
                    </div>
                    <div class="datos">
                        <div class="col-md-4"><h5>Pedidos</h5><p>N</p></div>
                        <div class="col-md-4 separadores"><h5>Servicios</h5><p>N</p></div>
                        <div class="col-md-4"><h5>Mensajes</h5><p>N</p></div>
                    </div>
                    <div class="servicios">
                        <div class="col-md-4"><img src="http://placehold.it/200x200" alt=""></div>
                        <div class="col-md-4 separadores"><img src="http://placehold.it/200x200" alt=""></div>
                        <div class="col-md-4"><img src="http://placehold.it/200x200" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once("footer.php"); ?>