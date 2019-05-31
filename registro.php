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
        if(empty($_POST["nombre_usuario"]) || empty($_POST["email"]) || empty($_POST["contraseña"])){
            echo "<p>No se pueden dejar campos vacíos.</p>";
        }
        else{
            $contraseña_encriptada = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);
            $consulta = $dbh->prepare("INSERT INTO usuarios (id_usuario, email, nombre_usuario, contraseña) VALUES (NULL, ?, ?, ?)");
            $consulta->execute([$_POST["email"], $_POST["nombre_usuario"], $contraseña_encriptada]);
            $resultado = $consulta->rowCount();
        }
    }
?>

<div class="form-group">
    <label for="nombre_usuario">Nombre</label>
    <input type="text" name="nombre_usuario" placeholder="Nombre de usuario">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Correo electrónico</label>
    <input type="email" name="email" placeholder="Correo electrónico">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" name="contraseña" placeholder="Contraseña">
</div>
<button type="submit" class="btn btn-primary" name="envio">Registrarse</button>
<?php
    if(!empty($resultado)){
        if($resultado != 0){
            echo "<p>Registro completado con éxito. Para iniciar sesión <a href='login.php'>haz click aquí</a>.</p>";
        }
        else{
            echo "<p>Ha habido un error en el registro.</p>";
        }
    }
?>
