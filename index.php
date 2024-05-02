<?php

global $dbPDO;
echo "<p> tttttt </p>";

require_once("pdo.php");

echo "<p> aaaaa </p>";

$resultat = $dbPDO->prepare("SELECT * FROM `film`");
$resultat->execute();

echo "<h2>Liste des meilleurs films des années 2010 :</h2>";
foreach ($resultat->fetchAll(PDO::FETCH_CLASS) as $films) {
    echo "<p>$films->titre - $films->genre - $films->realisateur - $films->datedesortie</p>";
}

echo "<h2> Insert </h2>";

?>

