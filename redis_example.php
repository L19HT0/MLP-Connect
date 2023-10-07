<?php
require 'vendor/autoload.php'; // Carga la biblioteca Predis

// Configura la conexión a Redis (asegúrate de que Redis esté en ejecución en localhost:6379)
$redis = new Predis\Client();

// Almacena datos en Redis
$redis->set('mi_llave', 'mi_valor');

// Recupera datos de Redis
$valor = $redis->get('mi_llave');

// Imprime los datos
echo 'Valor en Redis: ' . $valor;

// Cierra la conexión a Redis (no es necesario, se cierra automáticamente al finalizar el script)
?>
