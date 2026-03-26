<?php
class Article{
    public $titre;
    public $contenu;

public function afficher(){
    return "titre : "  . $this->titre .  "- contenu: " . $this->contenu;

}
}

$article1 = new Article();
$article1->titre = "introduction a php <br>";
$article1->contenu = "PHP est un langage de script côté serveur <br>";
echo $article1->afficher();

$article2 = new Article();
$article2->titre = "Programmation orientée objet <br>";
$article2->contenu = "La POO facilite la modularité et la maintenance <br>";
echo "<br>" . $article2->afficher();
