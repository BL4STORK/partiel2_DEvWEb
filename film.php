<?php
require_once ("pdo.php");

$name = $_POST["name"];

$resultat = $dbPDO->prepare("INSERT INTO film")