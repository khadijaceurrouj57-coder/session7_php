<?php
require "database.php";
$id= $_GET['id'];
$sql = "DELETE from articles where id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id'=>$id]);
header("Location: index.php");