<?php
// Obtener los datos enviados por la solicitud POST
$data = json_decode(file_get_contents('php://input'), true);

// Convertir los datos a formato JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Escribir los datos en el archivo data.json
$file = fopen('data.json', 'w');
fwrite($file, $jsonData);
fclose($file);

// Enviar una respuesta de éxito al cliente
echo json_encode(array('success' => true));
?>
