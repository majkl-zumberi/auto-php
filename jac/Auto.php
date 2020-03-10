<?php
namespace jac;
use jac\Veicolo;
use jac\CalcoloCO2;
use jac\Tipologia;

class Auto extends Veicolo implements CalcoloCO2{
   public function __construct ($targa, $modello, $potenza, $prezzo, $nPorte, $tipologia, $peso, $cx) {
        $this->targa = $targa;
        $this->modello = $modello;
        $this->potenza = $potenza;
        $this->prezzo = $prezzo;
        $this->nPorte = $nPorte;
        $this->tipologia = $tipologia;
        $this->peso = $peso;
        $this->cx = $cx;
    }

    public function calcolaCO2() {
        if ($this->tipologia==Tipologia::SUV) {
            echo ($this->peso*$this->potenza*$this->cx*1.5)/1000;
            echo "\n";
        } else {
            echo ($this->peso*$this->potenza*$this->cx)/1000;
            echo "\n";
        }
    }
    public function getModello(){
        echo "getting model..";
        echo "sas;".parent::getModello();
    }
    public function getPrezzo(){
        echo "getting price..";
        echo "sas;".$this->prezzo;
    }
    public function getNPorte() {
        echo "getting ports..";
        echo "sas;".$this->nPorte;
    }
    public function setNPorte($nPorte){
        echo "entrato per set porte";
        parent::setNporte($nPorte);
    }
    public function stampa(){
        echo "\nTipologia: ".$this->tipologia." Modello: ".parent::getModello()." prezzo: ".parent::getPrezzo()." porte: ".parent::getNPorte()." C02: ".$this->calcolaCO2();
    }
}
?>