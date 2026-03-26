<?php
require 'connexion.php';

$nom = htmlspecialchars(trim($_POST['nom']));
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

if (!$email) {
    die("Email invalide !");
}
$stmt = $pdo->prepare("insert into utilisateur (nom, email) values (:nom, :email)");
$stmt->execute([
   'nom' => $nom,
   'email' =>$email

]);
echo "utilisateur ajouté avec succés. ";
try{
} catch (PDOException $e){
    file_put_contents('logs/errors.log', $e->getMessage(), FILE_APPEND);
    echo"une erreur est survenue. contactez l'administrateur. ";
}
?>