<?php
$host="localhost";
$dbname="blogdb";
$user="root";
$password="";
try{
$pdo=new pdo("mysql:host=$host;dbname=$dbname",$user,$password);
$pdo->setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
echo"connexion resuite";
}catch(PDOException $e){
echo "message errour " .$e->getmessage();
}  