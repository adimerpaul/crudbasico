<?php
$mysqli = new mysqli("localhost","root","","tienda");
$nombre=$_POST['nombre'];
$carnet=$_POST['carnet'];
$direccion=$_POST['direccion'];
$mysqli->query("INSERT INTO personal SET nombre='$nombre',carnet='$carnet',direccion='$direccion'");
header('Location: index.php');
?>