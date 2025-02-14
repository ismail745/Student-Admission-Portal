<?php
// db.php : Connexion à la base de données

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "lsi27";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>
