<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Bootstrap</title>
    <link href="archivo.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="procesa2.php" method="post">
            <div class="form-group">
                <label for="Nombre">Nombre:</label>
                <input type="text" class="form-control" name="Nombre" id="Nombre" required>
            </div>
            <div class="form-group">
                <label for="dni">dni:</label>
                <input type="text" class="form-control" name="dni" id="dni" required>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" name="Email" id="Email" required>
            </div>
            <div class="form-group">
                <label for="Telefono">Teléfono:</label>
                <input type="tel" class="form-control" name="Telefono" id="Telefono" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-secondary">Borrar</button>
        </form>
    </div>
</body>
</html>
