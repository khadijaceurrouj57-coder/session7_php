<!-- 
require ("database.php");
$sql="select * from articles";
$stmt=$pdo->query($sql);
$article=$stmt->fetchAll(pdo::FETCH_ASSOC);
foreach($article as $articles){
    echo"<div  style= padding:10 PX ; margin:10 PX>";
    echo"<h2>".$articles['titre'] ."</h2>";
    echo"<P>".$articles['contenu'] ."</P>";
    echo"<h6>".$articles['date_publication'] ."</h6>";
    echo"</div>";
} -->
<?php
require("database.php");

// جلب المقالات
$sql = "SELECT * FROM articles ORDER BY date_publication DESC";
$stmt = $pdo->query($sql);
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Blog Manager</title>

    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            padding: 20px;
        }

        .article {
            background: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 10px;
        }

        a {
            margin-right: 10px;
            text-decoration: none;
        }

        .btn {
            padding: 5px 10px;
            border-radius: 5px;
        }

        .add { background: green; color: white; }
        .edit { background: orange; color: white; }
        .delete { background: red; color: white; }
    </style>
</head>

<body>

<h1> Liste des articles</h1>

<a href="add.php" class="btn add"> Ajouter</a>

<?php foreach ($articles as $article): ?>
    <div class="article">
        <h2><?= htmlspecialchars($article['titre']) ?></h2>
        <p><?= htmlspecialchars($article['contenu']) ?></p>
        <small><?= $article['date_publication'] ?></small><br><br>

        <a href="edit.php?id=<?= $article['id'] ?>" class="btn edit"> Modifier</a>
        <a href="delete.php?id=<?= $article['id'] ?>" class="btn delete"
           onclick="return confirm('Supprimer cet article ?')"> Supprimer</a>
    </div>
<?php endforeach; ?>

</body>
</html>
