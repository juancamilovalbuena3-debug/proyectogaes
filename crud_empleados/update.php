<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Agregar Empleado</h2>
    <form action="store.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" required>
        <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
        <input type="text" name="telefono" placeholder="Teléfono" class="form-control mb-2" required>
        <input type="text" name="cargo" placeholder="Cargo" class="form-control mb-2" required>
        <input type="number" name="salario" placeholder="Salario" class="form-control mb-2" required>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="index.php" class="btn btn-secondary">Volver</a>
    </form>
</body>
</html>
