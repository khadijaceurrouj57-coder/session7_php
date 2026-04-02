<?php
$host="localhost";
$dbname="blogdb";
$user="root";
$password='';

try{
    $pdo=new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
    $pdo->setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
    echo"connexion a ressuex $dbname";
}catch(PDOException $e){
    echo"l'erreur est " .$e->getmessage();

}

