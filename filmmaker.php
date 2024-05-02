<?php
require_once ("pdo.php");

$realisateur = $_POST["realisateur"];

$resultat = $dbPDO->prepare("SELECT * FROM `partiel2_web`")

echo "<h1> $realisateur : </h1>"

echo "<p> Nationalité : $realisateur->nationalité </p>"
echo "<h1> Filmographie : </h1>
        <ol>
            <li> $film->titre $film->datedesortie</li>
            
        </ol>"