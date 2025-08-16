<?php
// Contador de visitas
$file = 'contador.txt'; // Tu archivo contador
$contador = file_exists($file) ? (int)file_get_contents($file) : 0;
$contador++;
file_put_contents($file, $contador);
?>
