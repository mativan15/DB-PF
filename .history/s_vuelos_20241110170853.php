<?php
$host = 'localhost';
$dbname = 'nombre_de_la_base_de_datos';
$username = 'usuario';
$password = 'contraseña';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$fecha_salida = $_POST['departureDate'];
$pais_destino = $_POST['destination'];

$stmt = $conn->prepare("CALL BuscarVuelosPorParametros(:fecha_salida, 'Perú', :pais_destino)");
$stmt->bindParam(':fecha_salida', $fecha_salida);
$stmt->bindParam(':pais_destino', $pais_destino);
$stmt->execute();

$flights = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($flights);