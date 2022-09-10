<?php

  require ("../database/conexion.php");

  if(count($_POST) > 0){
    $inp_email_old = $_POST['inp_email_old'];
    $inp_email_new = $_POST['inp_email_new'];

    $conexion = mysqli_connect("localhost","root","","iac") or die("Problemas con la conexión");
    $query = mysqli_query($conexion,"UPDATE t_alumnos_del_curso SET Mail = '$inp_email_new' WHERE Mail = '$inp_email_old'") or die("Problemas en el select:".mysqli_error($conexion));
    $record_student = mysqli_query($conexion,"UPDATE t_alumnos_del_curso SET Mail = '$inp_email_new' WHERE Mail = '$inp_email_old'") or die("Problemas en el select:".mysqli_error($conexion));
    
    $message = "";
    if($record_student){
      $message = "Usuario actualizado.";
    }
    else{
      $message = "No se pudo actualizar el Email.";
    }

    if($message != "") echo "<script> alert('$message'); window.location.href = 'http://localhost/menu/modificacion'; </script>";
  }
