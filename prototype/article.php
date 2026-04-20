<?php
require "database.php";

$sql = "SELECT * FROM articles";
$stmt = $pdo->query($sql);
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
