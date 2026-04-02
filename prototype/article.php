<?php
require "database.php";

$sql = "SELECT * FROM articles";
$stmt = $pdo->query($sql);
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($articles as $article){
    echo "<div style='border:1px solid black; margin:10px; padding:10px;'>";
    echo "<h2>".$article['titre']."</h2>";
    echo "<p>".$article['contenu']."</p>";
    echo "<small>".$article['date_publication']."</small>";
    echo "</div>";
}




