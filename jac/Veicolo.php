<?php
namespace jac;

abstract class Veicolo {
    public $targa;
    public $modello;
    public $potenza;
    public $prezzo;
    public $nPorte;
    public $peso;
    public $cx;
    public $tipologia = [Tipologia::SUV,Tipologia::UTILITARIA,Tipologia::FUORISTRADA,Tipologia::BERLINA];

    public function getTarga() {
        return $this->targa;
    }

    public function setTarga($targa) {
        $this->targa = $targa;
    }

    public function getModello() {
        return $this->modello;
    }

    public function setModello($modello) {
        $this->modello = $modello;
    }

    public function getPotenza() {
        return $this->potenza;
    }

    public function setPotenza($potenza) {
        $this->potenza = $potenza;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function setPrezzo($prezzo) {
        $this->prezzo = $prezzo;
    }

    public function getNPorte() {
        return $this->nPorte;
    }

    public function setNPorte($nPorte) {
        $this->nPorte = $nPorte;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getCX() {
        return $this->cx;
    }

    public function setCX($cx) {
        $this->cx = $cx;
    }
}
?>