<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Banco</title>
</head>
<body>
    <?php include("header.php") ?>
    
    <div class="wrapper-2">
        <div class="contenedor-form">

            <h1>Súmate, usa la App</h1>
            <form action="" method="POST">
                <p>Ingresa tu nombre</p>
                <input type="text" name="nombre" id="">
                <p>Ingresa tu domicilio</p>
                <input type="text" name="domicilio">
                <p>Ingresa tu fecha de nacimiento</p>
                <input type="date" name="fecha" id="">
                <p>Ingresa tu correo electronico</p>
                <input type="text" name="correo" id="">
                <p>Ingresa tu coontraseña</p>
                <input type="password" name="pass1" id="">
                <p>Confirma tu coontraseña</p>
                <input type="password" name="pass2" id="">
                <input type="submit" value="Registrarse" name="Registrarse">
                
            </form>
        </div>
        <div class="contenedor-info">
        <?php 
                if (isset($_POST['Registrarse'])){
                    $nombre = $_POST['nombre'];
                    $domicilio = $_POST['domicilio'];
                    $fecha = $_POST['fecha'];
                    $correo = $_POST['correo'];
                    $pass = $_POST['pass1'];
                    $confirmpass = $_POST['pass2'];

                    
                        if($pass == $confirmpass){
                            echo "<h1>Felicidades, su informacion ha sido almacenada</h1>";
                            echo "<p>Nombre: $nombre<p>";
                            echo "<p>Domicilio: $domicilio<p>";
                            echo "<p>Fecha: $fecha<p>";
                            echo "<p>Correo: $correo<p>";
                            echo "<p>Contraseña: $pass<p>";
                        }else{
                            echo "<h1>La contraseña no coincide</h1>";
                        }
                }
            ?>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>
</html>