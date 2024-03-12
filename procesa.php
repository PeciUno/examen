<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar</title>
</head>
<body>
    <?php

        //Libros
        $nombre = $_POST["nombre"];
        $Cantidad = $_POST["Cantidad"];

        

        //Base de datos
        $servername = 'localhost';
        $username = 'phpmyadmin';
        $password = 'phpmyadmin';

        $conn = new mysqli($servername, $username, $password);

        if (!$conn){
            echo "Conexión fallida";
         } else {
            echo "Conexión Exitosa" . "<br>";
         }

         // Seleccionar base de datos
         mysqli_select_db ($conn, "panaderia");

         //panes
        $insertarlibro = "INSERT panes (nombre,cantidad) 
                            VALUES ('$nombre','$Cantidad')";

        if (mysqli_query($conn,$insertarlibro)) {
            echo "Insersión de datos exitosa" . "<br>";
        } else {
            echo "No se pudieron insertar los datos" . "<br>";
        };
        
        

       $con->close();
    ?>
</body>
</html>