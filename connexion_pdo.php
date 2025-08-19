<?php
$hostNom = 'host=localhost';
$userNom = 'root';
$password = '';
$bdd = 'ma_biblio_perso';

try {
    $monPdo = new PDO("mysql:$hostNom;dbname=$bdd;charset=utf8", $userNom, $password);
     $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    $monPdo = null;
}

?>