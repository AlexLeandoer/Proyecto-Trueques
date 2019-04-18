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

    <section id="login" class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Login</h2>
                <a href="#" id="registro_btn">Registro</a>
                <form id="contenido_form">
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Introduce tu correo">
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" placeholder="Introduce tu contraseña">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="recuerdame">
                        <label class="form-check-label" for="recuerdame">Recuerdame</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
    </section>
    <!-- /*LOGIN*/
section#login{

}
section#login form{
    border: solid blue 2px;
    padding: 40px;
} -->
    

<?php include_once("footer.php"); ?>
<script>
    $(function(){
        $("#registro_btn").click(function(e){
            e.preventDefault();
            $('#contenido_form').load("registro.html");
        });
    });
</script>