<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- links CSS -->
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <link rel="stylesheet" type="text/css" href="../generic/generic.css">
  
  <title>Modificar Alumno</title>
</head>
<body>
  
  <?php require ("C:/xampp/htdocs/menu/partesHTML/nav/nav.html"); ?>

  <form action="./modificacion.php" method="POST">
    <div class="control">
      <label for="inp_email_old">Email Actual</label>
      <input type="email" name="inp_email_old" id="inp_email_old">
    </div>
    <div class="control">
      <label for="inp_email_new">Email Nuevo</label>
      <input type="email" name="inp_email_new" id="inp_email_new">
    </div>
    <div class="control">
      <input type="submit" name="submit" value="Modificar">
    </div>
  </form>
</body>
</html>
  