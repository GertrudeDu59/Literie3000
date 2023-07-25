<?php
// Connexion à la base literie3000
$dsn = "mysql:host=localhost;dbname=literie3000";
$db = new PDO($dsn, "root", "");

// Récupérer les matelas de la table matelas
$query = $db->query("SELECT * FROM matelas");

// truc de tableau associatif
$matelas = $query->fetchAll(PDO::FETCH_ASSOC);

?>


            