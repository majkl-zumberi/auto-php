<!DOCTYPE html>

<html>

<head>

<title><?php echo $veicolo_da_id->getModello() ?></title>

</head>

<body>

<h1><?php echo $veicolo_da_id->getModello() ?></h1>

<p>Post numero: <?php echo $veicolo_da_id->getTarga() ?></p>
<?php echo var_dump($_GLOBALS)?>
</body>

</html>