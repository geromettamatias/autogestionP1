<?php 


$anunciosf = (isset($_POST['anunciosf'])) ? $_POST['anunciosf'] : '';


$data = array(
	'anuncio' => array('informe' => $anunciosf));




  


$json_historia= json_encode($data);

//crar Archivo json

$handler = fopen('../../profesor/anunciosDocentes/datos.json', 'w+');
fwrite($handler, $json_historia);
fclose($handler);

print json_encode($data, JSON_UNESCAPED_UNICODE);






 ?>