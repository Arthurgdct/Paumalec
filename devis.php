<?php
$nom = $_POST['nom'];
$societe = $_POST['societe'];
$email = $_POST['email'];
$message = $_POST['message'];
$pdo = new PDO("mysql:host=localhost;dbname=paumalec;charset=utf8","root","");
$stmt = $pdo->prepare("INSERT INTO devis (nom, societe, email, message) VALUES (?, ?, ?, ?)");
$stmt->execute([$nom, $societe, $email, $message]);
echo "OK";
?>