<?php
require_once 'model.php';
//http://localhost:8080/esercizi_ppt3/showVehicle.php?id=CV995ZX
$id=$_GET['id'];
$veicolo_da_id=get_veicolo_by_targa($id);
var_dump($veicolo_da_id);
echo $id;
require 'showVehicle.php';
?>
