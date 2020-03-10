<?php
namespace jac;

class Stampa{
  public function __construct(array $array){
    echo "\nstarting servizio stampa...";
    $this->stampaVeicolo($array);
  }
  public function stampaArr($array){
    print_r($array);
  }

public function stampaVeicolo(array $array){
  foreach($array as $item){
      $item->stampa();
}

}


}
?>