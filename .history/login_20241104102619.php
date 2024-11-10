<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "DB-PF";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $nombre = $conn->real_escape_string($_POST["nombre"]);
    $apellido = $conn->real_escape_string($_POST["apellido"]);
    $username = $conn->real_escape_string($_POST["username"]);
    $password =  $conn->real_escape_string($_POST["password"]);
    $dni = $conn->real_escape_string($_POST["dni"]);
    $telefono = $conn->real_escape_string($_POST["telefono"]);
    $email = $conn->real_escape_string($_POST["email"]);

    $sql = "INSERT INTO Cliente (nombre, apellidos, c_username, c_password, dni, telefono, email) 
            VALUES ('$nombre', '$apellido', '$username', '$password', '$dni', '$telefono', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
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

