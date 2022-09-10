<?php

require ("../database/conexion.php");

$message = null;

if(count($_POST) > 0){
    $nombre_del_alumno = $_POST['name_student'];
    $email_del_alumno = $_POST['email_student'];
    $id_curso_del_alumno = $_POST['code_course_student'];
    
    $query = "USE iac; INSERT INTO t_alumnos_del_curso ( NombreDelUsuario, Mail, Codigo_Curso) VALUES (:NombreDelUsuario,:Mail,:Codigo_Curso)";
    
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':NombreDelUsuario', $nombre_del_alumno);
    $stmt->bindParam(':Mail', $email_del_alumno);
    $stmt->bindParam(':Codigo_Curso', $id_curso_del_alumno);
    $student_inserted = ($stmt->execute()) ? true : false;
    
    $message = ($student_inserted) ? "Estudiante dado de alta" : "Ocurrio un Error, no se pudo dar de alta al alumno";
    
    if($message) echo "<script>alert('$message'); window.location.href = 'http://localhost/menu/alta' </script>";
}
