<?php
require("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titre = htmlspecialchars($_POST['titre']);
    $contenu = htmlspecialchars($_POST['contenu']);
    $date_publication = htmlspecialchars($_POST['date_publication']);

    $sql = "INSERT INTO articles (titre, contenu, date_publication) VALUES (:titre, :contenu, :date_publication)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        'titre' => $titre,
        'contenu' => $contenu,
        'date_publication'=> $date_publication
    ]);

    header("Location: index.php");
}
?>

<h2>Ajouter article</h2>

<form method="POST">
    <input type="text" name="titre" placeholder="Titre"><br><br>
    <textarea name="contenu" placeholder="Contenu"></textarea><br><br>
    <input type="datetime-local" name="date_publication"><br><br>
    <button type="submit">Ajouter</button>
</form>
