<?php
include("../config/db.php");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM empleados WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Editar Empleado</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="text" name="nombre" value="<?= $row['nombre'] ?>" class="form-control mb-2" required>
        <input type="email" name="email" value="<?= $row['email'] ?>" class="form-control mb-2" required>
        <input type="text" name="telefono" value="<?= $row['telefono'] ?>" class="form-control mb-2" required>
        <input type="text" name="cargo" value="<?= $row['cargo'] ?>" class="form-control mb-2" required>
        <input type="number" name="salario" value="<?= $row['salario'] ?>" class="form-control mb-2" required>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="index.php" class="btn btn-secondary">Volver</a>
    </form>
</body>
</html>
