<?php
namespace jac;
use jac\Veicolo;
use jac\CalcoloCO2;

class Moto extends Veicolo implements CalcoloCO2 {
    public function __construct ($targa, $modello, $potenza, $prezzo, $peso, $cx) {
        $this->targa = $targa;
        $this->modello = $modello;
        $this->potenza = $potenza;
        $this->prezzo = $prezzo;
        $this->nPorte = null;
        $this->tipologia = null;
        $this->peso = $peso;
        $this->cx = $cx;
    }

    public function calcolaCO2() {
        return ($this->peso*$this->potenza*$this->cx*1.5)/1000;
        echo "\n";
    }

    public function stampa(){
        echo "\nMoto(modello): ".$this->modello." Prezzo: ".$this->prezzo." C02: ".$this->calcolaCO2();
    }
    public function getTarga(){
        echo parent::getTarga();
    }
}
?>