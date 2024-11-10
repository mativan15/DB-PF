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

    $sql_e = "SELECT nombre, apellidos, e_password, dni, telefono, id_sucursal, puesto FROM Empleado WHERE e_username = '$username'";
    $result_e = $conn->query($sql_e);
    $sql_c = "SELECT nombre, apellidos, c_password, dni, telefono, email FROM Cliente WHERE c_username = '$username'";
    $result_c = $conn->query($sql_c);
    if ($result_e->num_rows > 0) {
        $row = $result_e->fetch_assoc();
        if ($row['e_password'] === $password_ingresado) {
            $_SESSION['username'] = $username; 
            $_SESSION['nombre'] = $row['nombre']; 
            $_SESSION['apellidos'] = $row['apellidos']; 
            $_SESSION['dni'] = $row['dni']; 
            $_SESSION['telefono'] = $row['telefono']; 
            $_SESSION['id_sucursal'] = $row['id_sucursal'];
            $_SESSION['puesto'] = $row['puesto']; 
            echo "Inicio de sesión exitoso. Bienvenido, " . htmlspecialchars($username) . "!";
            header("Location: administrador.html"); 
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else if ($result_c->num_rows > 0) {
        $row = $result_c->fetch_assoc();
        if ($row['c_password'] === $password_ingresado) {
            $_SESSION['username'] = $username; 
            $_SESSION['nombre'] = $row['nombre']; 
            $_SESSION['apellidos'] = $row['apellidos']; 
            $_SESSION['dni'] = $row['dni']; 
            $_SESSION['telefono'] = $row['telefono']; 
            $_SESSION['email'] = $row['email']; 
            echo "Inicio de sesión exitoso. Bienvenido, " . htmlspecialchars($username) . "!";
            header("Location: landing.php"); 
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
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