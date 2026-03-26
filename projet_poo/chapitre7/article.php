<?php
class article{
    public $titre;
    public $contenu;

public function afficher(){
    return "titre : "  . $this->titre .  "- contenu: " . $this->contenu;

}
}
$article1 = new Article();
$article1->titre ="introduction a php";

