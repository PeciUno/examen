<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar</title>
</head>
<body>
    <?php
//recoger post
        $pan = $_POST["pan"];
        $usuario = $_POST["usuario"];
        $detalles = $_POST["detalles"];
        $cantidad = $_POST["cantidad"];
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
        
        //Preparo las consultas para obtener los id de usuario y pan
        $consulpan = "SELECT id FROM panes WHERE nombre = '$pan'";
	$consusuario = "SELECT id FROM usuarios WHERE nombre = '$usuario'";


        //Consulto (aqui hay algun error que no consigo identificar)
        //con esto: echo $usuarios . "<br>" . $panes . "<br>" . $detalles . "<br>" . $cantidad;
        //Podemos comprobar que hasta aqui funciona bien

				$panes = mysqli_query($con, $consulpan);
				if (!$panes) {
					die("Error al ejecutar la consulta de panes: " . mysqli_error($con));
				}
				while ($id_pan = mysqli_fetch_row($panes)) {
					$pan_id = $id_pan[0];
				}

				$usuarios = mysqli_query($con, $consusuario);
				if (!$usuarios) {
					die("Error al ejecutar la consulta de usuarios: " . mysqli_error($con));
				}
				while ($id_usuario = mysqli_fetch_row($usuarios)) {
					$usuario_id = $id_usuario[0];
				}


				//Inserto en la base de datos
				$insert_pres = "INSERT INTO pedidos 
								(id_pan, id_usuario, detalles, cantidad)
								VALUES($pan_id, $usuario_id, '$detalles', '$cantidad');";

				//Verifico
				if ($result = mysqli_query($con, $insert_pres)) {
					echo "<h3 class='center'>pedido de " . $pan ." insertado correctamente."."<br/>"."</h3>";
							
				} else {
					echo ("No ha sido posible registrar el pedido -> ". mysqli_error($con))."<br/>"."<br/>";
				}
        
       $con->close();

?>
</body>
</html>