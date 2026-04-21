<?php
require("database.php");

$id = $_GET['id'];


$sql = "SELECT * FROM articles WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$article = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titre = htmlspecialchars($_POST['titre']);
    $contenu = htmlspecialchars($_POST['contenu']);
    $date_publication = htmlspecialchars($_POST['date_publication']);

    $sql = "UPDATE articles 
            SET titre = :titre, contenu = :contenu, date_publication = :date_publication 
            WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'titre' => $titre,
        'contenu' => $contenu,
        'date_publication' => $date_publication,
        'id' => $id
    ]);

    header("Location: index.php");
}
?>

<h2>Modifier article</h2>

<form method="POST">
    <input type="text" name="titre" value="<?= $article['titre'] ?>"><br><br>
    <textarea name="contenu"><?= $article['contenu'] ?></textarea><br><br>
    <input type="datetime-local" name="date_publication"><br><br>
    <button type="submit">Modifier</button>
</form>