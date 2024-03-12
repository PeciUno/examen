<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar</title>
</head>
<body>
    <?php
//Usuarios
        $Nombre = $_POST["Nombre"];
        $dni = $_POST["dni"];
        $Email = $_POST["Email"];
        $Telefono = $_POST["Telefono"];
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
        //Ususarios

        $insertarusuario = "INSERT usuarios (nombre,dni,email,telefono)
                            VALUES ('$Nombre','$dni','$Email','$Telefono')";

        if (mysqli_query($conn,$insertarusuario)) {
                echo "Insersión de datos exitosa". "<br>";
        } else {
                echo "No se pudieron insertar los datos";
        };

        

       $con->close();

?>
</body>
</html>