<?php
require 'connexion.php';
try{
$sql ="select * from utilisateur";
$stmt =$pdo->query($sql);

$utilisateurs = $stmt->fetchall(PDO :: FETCH_ASSOC);
foreach($utilisateurs as $user){
    echo "ID :". $user['id'] . "- NOM :" . $user['nom'] . " - EMAIL :" .$user['email'] . "<br>";

}
}catch(PDOException $e){
    echo "erreur :" . $e ->getmessage();

}
echo "<table border='1'>
<tr><th>ID</th><th>Nom</th><th>Email</th></tr>";
foreach ($utilisateurs as $user) {
    echo "<tr><td>{$user['id']}</td><td>{$user['nom']}</td><td>{$user['email']}</td></tr>";
}
echo "</table>";