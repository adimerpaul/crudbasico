<?php
$mysqli = new mysqli("localhost","root","","tienda");
$id=$_GET['id'];
$mysqli->query("DELETE FROM personal WHERE id='$id'");
header('Location: index.php');
?>