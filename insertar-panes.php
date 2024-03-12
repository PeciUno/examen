<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="archivo.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <form action="procesa.php" method="post">
      <div class="form-group">
        <label for="nombre">nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" required>
      </div>
      <div class="form-group">
        <label for="Cantidad">Cantidad:</label>
        <input type="text" class="form-control" name="Cantidad" id="Cantidad" required>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
      <button type="reset" class="btn btn-secondary">Borrar</button>
    </form>
  </div>
</body>
</html>