<?php
require_once ("pdo.php");

session_start();
echo "<h1> Ajouter un film </h1>"
echo $_SESSION['Titre :'];
echo $_SESSION['Description :'];
echo $_SESSION['Durée (enmm) :'];
echo $_SESSION['Date de sortie :'];
echo $_SESSION['Genre : '];
echo $_SESSION['Réalisateur : '];

session_destroy();
?>