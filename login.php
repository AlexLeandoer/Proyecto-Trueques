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
        if(empty($_POST["email"]) || empty($_POST["contrasena"])){
            $mensaje = "<div class='alert alert-danger' role='alert'>
                             No se pueden dejar campos vacíos.
                        </div>";
        }
        else{
            $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE loginUsuario = ?");
            $consulta->execute([$_POST["email"]]);
            $usuario = $consulta->fetch();
            if(empty($usuario)){
                $mensaje = "<div class='alert alert-danger' role='alert'>
                                No existe un usuario con ese correo electrónico registrado.
                            </div>";
            }
            if(password_verify($_POST["contrasena"], $usuario["passUsuario"]) == true){
                $_SESSION["idUsuario"] = $usuario["idUsuario"];
                $_SESSION["nombre_usuario"] = $usuario["nombre_usuario"];
                if(isset($_POST["sesion"])){
                    setcookie("Sesión", session_encode(), time() + 86400, "/");
                }
                header("location:perfil.php");
            }
            else{
                $mensaje = "<div class='alert alert-danger' role='alert'>
                                Contraseña incorrecta.
                            </div>";
                die;
            }
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
                <h2>Login</h2>
                <h2><a href="registro.php">Registro</a></h2>
                <form id="contenido_form" action="#" method="POST">
                    <?php echo $mensaje ?>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Introduce tu correo...">
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" placeholder="Introduce tu contraseña....">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="sesion">
                        <label class="form-check-label" for="sesion">Mantener sesión</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="envio">Entrar</button>
                </form>
            </div>
        </div>
    </section>  

<?php include_once("footer.php"); ?>
