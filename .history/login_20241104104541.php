<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "DB_PF";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $username = $conn->real_escape_string($_POST["username"]);
    $password_ingresado = $_POST["password"]; 

    $sql = "SELECT c_password FROM Cliente WHERE c_username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['c_password'] === $password_ingresado) {
            $_SESSION['username'] = $username; 
            echo "Inicio de sesión exitoso. Bienvenido, " . htmlspecialchars($username) . "!";
            header("Location: landing.html"); 
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    // Cerrar conexión
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