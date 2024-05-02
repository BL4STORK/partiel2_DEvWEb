<?php

global $dbPDO;
echo "<p> tttttt </p>";

require_once("pdo.php");

echo "<p> aaaaa </p>";

$resultat = $dbPDO->prepare("SELECT * FROM `partiel2_web`");
$resultat->execute();

echo "<h2>Liste des meilleurs films des années 2010 :</h2>";
foreach ($resultat->fetchAll(PDO::FETCH_CLASS) as $film) {
    echo "<p>$film->titre - $film->genre - $film->realisateur - $film->datedesortie</p>";
}

echo "<h2> Insert </h2>";

?>

