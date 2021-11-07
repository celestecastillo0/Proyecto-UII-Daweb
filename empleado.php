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
    
    <div class="wrapper-3">
        <div class="contenedor-form">

            <h1>Inicia sesión</h1>
            <form action="" method="POST">
                <p>Ingresa tu correo electronico</p>
                <input type="text" name="correo" id="">
                <p>Ingresa tu coontraseña</p>
                <input type="password" name="pass" id="">
                <input type="submit" value="Entra" name="Entra">
                
            </form>
        </div>
        <div class="contenedor-info">
        <?php 
                if (isset($_POST['Entra'])){
                    $correo = $_POST['correo'];
                    $pass = $_POST['pass'];

                        echo "<h1 style='color:#000'>Bienvenido!</h1>";
                }
                
            ?>
        </div>
    </div>
    <?php include ('footer.php') ?>

</body>
</html>