<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- links CSS -->
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <link rel="stylesheet" type="text/css" href="../generic/generic.css">
  
  <title>Buscar Alumno</title>
</head>
<body>
  
  <?php require ("C:/xampp/htdocs/menu/partesHTML/nav/nav.html"); ?>
  
  <form class="form" method="post" action="./baja.php">
    <div class="control">
      <label for="search">Busqueda </label>
      <input required class="form__search" type="email" id="search" name="search" placeholder="Escribi aca el correo">
    </div>
    <div class="control">
      <input required class="form__submit" type="submit" name="submit" value="Dar de baja">
    </div>
  </form>

  <?php require ("C:/xampp/htdocs/menu/partesHTML/footer/footer.html"); ?>  
  
  <!-- links scripts -->
  <script src="js/main.js"></script>

</body>
</html>
