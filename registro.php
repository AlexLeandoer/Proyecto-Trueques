<?php
    include "conexion.php";
    $mensaje = "";
    session_start();

    if(isset($_COOKIE["Sesión"])){
        session_decode($_COOKIE["Sesión"]);
    }

    if(isset($_SESSION["idUsuario"])){
        header("location:principal.php");
    }

    if(isset($_POST["envio"])){
        if(empty($_POST["nombreUsuario"]) || empty($_POST["loginUsuario"]) || empty($_POST["passUsuario"])){
            $mensaje = "<div class='alert alert-danger' role='alert'>
                            No se pueden dejar campos vacíos.
                        </div>";
        }
        else{
            $contraseña_encriptada = password_hash($_POST["passUsuario"], PASSWORD_DEFAULT);
            $consulta = $conexion->prepare("INSERT INTO usuarios (nombreUsuario, loginUsuario, passUsuario) VALUES (?, ?, ?)");
            $consulta->execute([$_POST["nombreUsuario"], $_POST["loginUsuario"], $contraseña_encriptada]);
            $resultado = $consulta->rowCount();
        }
    }
?>
<?php include_once("header.php"); ?>

<header id="header2">
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <form class="d-flex justify-content-center">
            <input class="form-control buscador" type="search" placeholder="Buscar..." aria-label="Search">
        </form> -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="user-image" href="login.php?"> 
                   Entrar
                </a>
                </li>
            </ul>
            
        </div>
    </nav>
</header>

<section id="login" class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>Registro</h2>
            <form id="contenido_form" action="#" method="POST">
                <?php echo $mensaje ?>
                <div class="form-group">
                    <label for="nombreUsuario">Nombre</label>
                    <input type="text" name="nombreUsuario" placeholder="Nombre de usuario">
                </div>
                <div class="form-group">
                    <label for="loginUsuario">Correo electrónico</label>
                    <input type="email" name="loginUsuario" placeholder="Correo electrónico">
                </div>
                <div class="form-group">
                    <label for="passUsuario">Contraseña</label>
                    <input type="password" name="passUsuario" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn btn-primary" name="envio">Registrarse</button>
            </form>
        </div>
    </div>
</section>

<?php
    // if(!empty($resultado)){
    //     if($resultado != 0){
    //         echo "<p>Registro completado con éxito. Para iniciar sesión <a href='login.php'>haz click aquí</a>.</p>";
    //     }
    //     else{
    //         echo "<p>Ha habido un error en el registro.</p>";
    //     }
    // }
?>
<?php include_once("footer.php"); ?>
