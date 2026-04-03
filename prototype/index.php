<?php
require "article.php";

foreach($articles as $article){
    echo "<div style='border:1px solid black; margin:10px; padding:10px;'>";
    echo "<h2>".$article['titre']."</h2>";
    echo "<p>".$article['contenu']."</p>";
    echo "<small>".$article['date_publication']."</small>";
    echo "</div>";
}
