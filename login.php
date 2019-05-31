<?php
    include "conexion.php";

    session_start();

    if(isset($_COOKIE["Sesión"])){
        session_decode($_COOKIE["Sesión"]);
    }

    if(isset($_SESSION["id_usuario"])){
        header("location:principal.php");
    }

    if(isset($_POST["envio"])){
        if(empty($_POST["email"]) || empty($_POST["contraseña"])){
            echo "<p>No se pueden dejar campos vacíos.</p>";
        }
        else{
            $consulta = $dbh->prepare("SELECT * FROM usuarios WHERE loginUsuario = ?");
            $consulta->execute([$_POST["email"]]);
            $usuario = $consulta->fetch();
            if(empty($usuario)){
                echo "<p>No existe un usuario con ese correo electrónico registrado.</p>";
                die;
            }
            if(password_verify($_POST["contraseña"], $usuario["passUsuario"]) == true){
                $_SESSION["id_usuario"] = $usuario["id_usuario"];
                $_SESSION["nombre_usuario"] = $usuario["nombre_usuario"];
                if(isset($_POST["sesion"])){
                    $_SESSION["mantener"] = true;
                    setcookie("Sesión", session_encode(), time() + 86400, "/");
                }
                header("location:panel_usuario.php");
            }
            else{
                echo "<p>Contraseña incorrecta.</p>";
                die;
            }
        }
    }
?>
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
                <h2><a href="#" id="registro_btn">Registro</a></h2>
                <form id="contenido_form">
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Introduce tu correo...">
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control" id="contraseña" placeholder="Introduce tu contraseña....">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="sesion">
                        <label class="form-check-label" for="sesion">Recuerdame</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="envio">Entrar</button>
                </form>
            </div>
        </div>
    </section>  

<?php include_once("footer.php"); ?>
<script>
    $(function(){
        $("#registro_btn").click(function(e){
            e.preventDefault();
            $('#contenido_form').load("registro.html");
        });
    });
</script>