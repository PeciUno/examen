<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="archivo.css">
</head>
    <body>
        <div class="container mt-5">
        <h1>Introduzca los datos del nuevo pedido</h1>
        <form action= "procesa3.php" method = "post">
            <div class="form-group">
                <?php
                //panes
                    $host = "localhost";
                    $user = "phpmyadmin";
                    $pass = "phpmyadmin";
                    $database = "panaderia";
            
                    //Conectando
                    $con = new mysqli($host, $user, $pass, $database);
                    //Selecciono la base de datos
                    mysqli_select_db($con, "panaderia");
                    //Creo la sentencia
                    $consultar="SELECT nombre FROM panes";
                    //libros = panes
                    //
                    //Ejecuto la sentencia
                    $registros=mysqli_query($con,$consultar);	
                    echo "<label for='pan'>Elige un pan:</label>";
                    echo "<select name='pan' id='pan' class='form-control'>";
                    while($registro=mysqli_fetch_row($registros)){
                        
                        echo "<option value='$registro[0]'>".$registro[0] ."</option>";
                        
                    }
                    echo "</select>";
                ?>
            </div>
            <div class="form-group">
                <?php
                //usuarios
                    $host = "localhost";
                    $user = "phpmyadmin";
                    $pass = "phpmyadmin";
                    $database = "panaderia";
            
                    //Conectando
                    $con = new mysqli($host, $user, $pass, $database);
                    //Selecciono la base de datos
                    mysqli_select_db($con, "panaderia");
                    //Creo la sentencia
                    $consultar2="SELECT nombre FROM usuarios";
                    //Ejecuto la sentencia
                    $registros2=mysqli_query($con,$consultar2);	
                    echo "<label for='usuario'>Elige un nombre de usuario:</label>";
                    echo "<select name='usuario' id='usuario' class='form-control'>";
                    while($registro2=mysqli_fetch_row($registros2)){
                        
                        echo "<option value='$registro2[0]'>".$registro2[0] ."</option>";
                        
                    }
                    echo "</select>";
                ?>
            </div>
            <div class="form-group">
                <label for="detalles">detalles:</label>
                <input type="text" class="form-control" name="detalles" id="detalles" required>
            </div>
            <div class="form-group">
                <label for="cantidad">cantidad:</label>
                <input type="text" class="form-control" name="cantidad" id="cantidad" required>
            </div>
            <button type="submit" class="btn btn-primary">enviar</button>
            <button type ="reset" class="btn btn-primary">borrar</button>
        </form>
        </div>
    </body>
</html>