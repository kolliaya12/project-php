<?php
// Connexion à la base de données MySQL
$serveur = "localhost";
$username= "root";
$password = "";
$db_name = "database1";

$conn = new mysqli("localhost", "root", "", "database1");
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

$username = $_POST['user'];
$password = $_POST['pass'];
$email = $_POST['email'];

$stmt = $conn->prepare("INSERT INTO login (username, password, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $password, $email);
if ($stmt->execute()) {
    echo "Inscription réussie !";
} else {
    echo "Erreur lors de l'inscription : " . $conn->error;
}

$stmt->close();
$conn->close();
?>

