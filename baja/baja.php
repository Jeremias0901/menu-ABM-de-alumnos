<?php

  require "../database/conexion.php";

  if(count($_POST) > 0){

    $conexion = mysqli_connect("localhost","root","","iac") or die("Problemas con la conexión");
    $registros = mysqli_query($conexion, "select * from t_alumnos_del_curso where mail= '$_REQUEST[search]'") or die("Problemas en el select:" . mysqli_error($conexion));
    
    $message = null;

    if($reg = mysqli_fetch_array($registros)){
      mysqli_query($conexion, "delete from t_alumnos_del_curso where ID = '$reg[ID]'") or die("Problemas en el select:" . mysqli_error($conexion));
      $message = "Se efectuó el borrado de " . $reg['NombreDelUsuario'];
    } else{
      $message = "No existe un alumno con ese mail.";
    }

    if(isset($message)) echo "<script>alert('$message'); window.location.href = 'http://localhost/menu/baja' </script>";
  }
