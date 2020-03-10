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

    $auto1 = new Auto('CV998ZX', 'Mercedes', 1200, 15000, 4, 'SUV', 700, 2.3);
    $auto2 = new Auto('CV998ZX', 'Mercedes', 1200, 15000, 5, 'Berlina', 700, 2.3);
    $auto3 = new Auto('CV998ZX', 'Mercedes', 1200, 15000, 4, 'Fuoristrada', 700, 2.3);
    $moto1 = new Moto("TARGA MOTO", "HARLEY", "420", "7000", 200, 1);
    $auto1->calcolaCO2();
    $auto2->calcolaCO2();
    $auto3->calcolaCO2();

    $auto1->getModello();
    $auto1->getPrezzo();
    $auto1->getNPorte();
    $auto1->setNporte(2);
    $auto1->getNPorte();
    $lista=array($auto1,$auto2,$auto3,$moto1);
    $stampa=new Stampa($lista);
   // $stampa->stampaVeicolo($lista);
   

?>