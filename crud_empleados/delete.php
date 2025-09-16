<?php
include("../config/db.php");
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];

$sql = "INSERT INTO empleados (nombre,email,telefono,cargo,salario) VALUES ('$nombre','$email','$telefono','$cargo','$salario')";
$conn->query($sql);
header("Location: index.php");
?>
