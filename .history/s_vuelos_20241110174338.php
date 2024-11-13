<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$host = 'localhost';
$dbname = 'DB_PF';
$username = 'root';
$password = '';
try {
    echo json_encode(['status' => 'PHP está funcionando']);

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    var_dump($_POST);
    $fecha_salida = $_POST['departureDate'];
    $pais_destino = $_POST['destination'];

    $stmt = $conn->prepare("CALL BuscarVuelos(:fecha_salida, 'Perú', :pais_destino)");
    $stmt->bindParam(':fecha_salida', $fecha_salida);
    $stmt->bindParam(':pais_destino', $pais_destino);
    $stmt->execute();

    $flights = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($flights) > 0) {
        echo json_encode($flights);
    } else {
        echo json_encode(['message' => 'No se encontraron vuelos xdd']);
    }
} catch (PDOException $e) {
    echo json_encode(['error' => 'Error de conexión o ejecución: ' . $e->getMessage()]);
}