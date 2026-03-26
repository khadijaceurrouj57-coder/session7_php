<?php
require 'ArticleEncapsule.php';


$article = new Article();
$article->setTitre("POO en PHP<br> ");
$article->setContenu("<p>Introduction à la programmation orientée objet.</p> <br>");
echo $article->afficher();
