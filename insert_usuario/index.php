<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capturar Usuario</title>
</head>
<body>
    <form action="insert.php">
        <input type="text" name="usuario" placeholder="Usuario">
        <input type="text" name="contra" placeholder="Contraseña">
        <input type="text" name="nombre" placeholder="Nombre">
        <select name="puesto">
            <option>Arbitro</option>
            <option>Arbitro Admin</option>
            <option>Mesa Directiva</option>
        </select>
        <input type="submit" value="Capturar">
    </form>
</body>
</html>