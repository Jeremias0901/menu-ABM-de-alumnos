
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Chrome">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alta</title>

  <!-- links CSS -->
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="../generic/generic.css">
</head>
<body>
  <?php require ("C:/xampp/htdocs/menu/partesHTML/nav/nav.html"); ?>
  <form action="./alta.php" method="post">
    <h3> Alta de Alumno </h3>
    <div class="control">
      <label for="inp_NombreDelUsuario">Nombre Del Estudiante</label>
      <input required name="name_student" type="text" id="inp_NombreDelUsuario">
    </div>
    <div class="control">
      <label for="inp_Mail">Mail</label>
      <input required name="email_student" type="email" id="inp_Mail">
    </div>
    <div class="control">
      <label for="inp_Codigo_Curso">Codigo Curso</label>
      <input required name="code_course_student" type="number" id="inp_Codigo_Curso">
    </div>
    <div class="control">
      <input required type="submit" value="Dar de Alta">
    </div>
  </form>
  <div class="message"></div>
  <script>
    var form = document.querySelector("form");

    form.onsubmit = (e) =>{
      
      var inp_NombreDelUsuario = document.querySelector("#inp_NombreDelUsuario");
      var inp_Mail = document.querySelector("#inp_Mail");
      var inp_Codigo_Curso = document.querySelector("#inp_Codigo_Curso");
      
      var validated = (( inp_NombreDelUsuario.value != "") && ( inp_Mail.value != "") && ( parseInt(inp_Codigo_Curso.value) > 0));
      if(!validated){
        alert("complete correctamente todos los campos!!");
        e.preventDefault();
      }
    }
  </script>
</body>
</html>
