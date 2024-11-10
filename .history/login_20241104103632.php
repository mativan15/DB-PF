<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="login.css"> 
</head>
<body>
    <div class="container">
        <h2>Iniciar sesión</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="username">Usuario:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Iniciar sesión">
        </form>
        <div class="signup">
        <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a>.</p>

        </div>
    </div>
</body>
</html>

