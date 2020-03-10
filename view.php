<!DOCTYPE html>

<html>

<head>

<title>Lista dei veicoli</title>

</head>

<body>

<h1>Lista dei veicolo</h1>

<ul>

<?php foreach ( $veicoli as $veicolo ){ ?>

<li>

<a href="/esercizi_ppt3/showVehicle.php?id=<?php $veicolo->getTarga(); ?>">

<?php echo $veicolo->getModello()?>

</a>

</li>

<?php } ?>

</ul>

</body>

</html>