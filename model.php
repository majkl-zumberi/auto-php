<?php
include('jac/Veicolo.php');
include('jac/CalcoloCO2.php');
include('jac/Tipologia.php');
include('jac/Auto.php');
include('jac/Moto.php');
include('jac/Stampa.php');

use jac\Veicolo;
use jac\Auto;
use jac\Moto;
use jac\CalcoloCO2;
use jac\Tipologia;
use jac\Stampa;
function getAllVehicles(){
    $auto1 = new Auto('CV997ZX', 'Mercedes', 1200, 15000, 4, 'SUV', 700, 2.3);
    $auto2 = new Auto('CV995ZX', 'fiat', 1200, 15000, 5, 'Berlina', 700, 2.3);
    $auto3 = new Auto('CV994ZX', 'sederino', 1200, 15000, 4, 'Fuoristrada', 700, 2.3);
    $moto1 = new Moto("MM994ZX", "HARLEY", "420", "7000", 200, 1);
    $lista=array($auto1,$auto2,$auto3,$moto1);
    return $lista;
}
function get_veicolo_by_targa( $targa ){

    $veicoli = getAllVehicles();
    
    foreach($veicoli as $veicolo){
    
        if($veicolo->getTarga() == $targa){
        
            return $veicolo;
        
        }
    
    }
} 

?>