<?php 
    $mensaje = "";
    if($_POST){
        require_once("conexion.php");
        $nombreUsuario = $_POST['nombreUsuario'];
        $loginUsuario  = $_POST['loginUsuario'];
        $passUsuario   = $_POST['passUsuario'];
        $confirmacion  = $_POST['confirmacion'];  
        $avatarUsuario = $_FILES['avatarUsuario'];

        $nombreAvatar = $avatarUsuario["name"];
        $ruta = "img/avatars/". $nombreAvatar;
        $temporal= $avatarUsuario["tmp_name"];

        $consulta1 = "SELECT * FROM usuarios WHERE loginUsuario = ?";
        $sentencia1=$conexion->prepare($consulta1);
        $sentencia1->execute([$loginUsuario]);
        $resultado1 = $sentencia1->fetch();

        if($passUsuario != $confirmacion) {
            $mensaje = '<div class="alert alert-danger" role="alert">
                            Las contraseñas no coinciden   
                        </div>';
        }
        else{
            if($resultado1){
                $mensaje = '<div class="alert alert-danger" role="alert">
                    ¡Ya existe este usuario!   
                    </div>';
            }
            else {
                $consulta2 = "INSERT INTO usuarios (nombreUsuario, loginUsuario, passUsuario, avatarUsuario) VALUES (?,?,?,?)";

                $sentencia2=$conexion->prepare($consulta2);
                $resultado2 = $sentencia2->execute([$nombreUsuario,$loginUsuario,hash('sha512',$passUsuario),$nombreAvatar]);

                if($resultado2){
                    move_uploaded_file($temporal,$ruta);
                    $mensaje = '<div class="alert alert-success" role="alert">
                                    Usuario insertado   
                                </div>';
                
                }    
            }
        } 
    }
?>


<?php include("header.php");?>

<div class="container my-5">
    <div class="row my-5">
        <div class="offset-2 col-8">
            <h1>Añadir Usuario</h1>
        </div>
    </div>

    <div class="row">
        <div class="offset-2 col-8">
            <?php  echo $mensaje; ?>
        </div>
    </div>


    <div class="row my-5">
        <div class="offset-2 col-8">
            <form action="#" method="post" enctype="multipart/form-data">
                <input type="text" class="form-control mb-4 p-4" name="nombreUsuario" placeholder="Nombre Usuario" required>

                <input type="email" class="form-control mb-4 p-4" name="loginUsuario" placeholder="Email  Usuario" required>

                <input type="password" class="form-control mb-4 p-4" name="passUsuario" placeholder="Contraseña" required>

                <input type="password" class="form-control mb-4 p-4" name="confirmacion" placeholder="Repetir contraseña" required>
                    
                <label for="avatarUsuario" class="btn btn-danger  px-5 py-3 mt-2">Subir avatar</label>

                <input type="file" class="d-none" name="avatarUsuario" placeholder="Avatar Usuario" required id="avatarUsuario">

                <input  class="btn btn-primary px-5 py-3" type="submit" value="Insertar">
            </form>
        </div>
    </div>

</div>


<?php include("footer.php");?>