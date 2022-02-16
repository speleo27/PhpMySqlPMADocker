<?php
$dsn = 'mysql:dbname=tutorial;host=mysql';
$user = 'root';
$password = 'secret';


try {
	$bdd = new PDO($dsn, $user, $password);
	echo "connecté";
}
catch (PDOException $e) {
	echo 'Échec lors de la connexion : ' . $e->getMessage();
}