<?php

$conectar = mysqli_connect('localhost','root','','registro') or die('Error en la conexion servidor');


$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$disponibilidad= 'tardes,fines';
if(isset($_POST['disponibilidad'] ) ){
    $disponibilidad = implode(',' , $_POST['disponibilidad']);
}
$edad = $_POST['edad'];

$sql= "INSERT INTO voluntario VALUES (null,'$nombre','$apellidos',
'$correo','$usuario','$clave','$telefono','$sexo','$disponibilidad','$edad')";


mysqli_query($conectar,$sql) or die ('Error en el query database');
echo $sql;
mysqli_close($conectar);

?>