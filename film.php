<?php
require_once ("pdo.php");

$titre = $_POST["titre"];

$resultat = $dbPDO->prepare("SELECT * FROM `film`")

echo "<h1> $film :</h1>"
echo "<p> $film->datedesortie en salle | $film->durée | $genre->libelle </p>";
echo "<p> De $realisateur->prenom - $realisateur->nom"
echo "<p> Synopsis : $film->description"