<?php
$redisEndpoint = 'redis-12030.c1.us-east1-2.gce.cloud.redislabs.com:12030';  // Reemplaza con tu endpoint
$redisPort = 6379;  // Puerto predeterminado para Redis

try {
    $redis = new Redis();
    $redis->connect($redisEndpoint, $redisPort);
    
    // Puedes hacer operaciones en Redis aquí
    $redis->set('mi_llave', 'mi_valor');
    $value = $redis->get('mi_llave');
    echo 'Valor en Redis: ' . $value;
    
    // Cierra la conexión
    $redis->close();
} catch (Exception $e) {
    echo 'Error al conectar a Redis: ' . $e->getMessage();
}
?>