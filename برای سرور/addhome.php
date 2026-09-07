<?php

header("Content-Type: text/html; charset=UTF-8");

$topic = $_POST["topic"];

$pdo = new PDO(
    "mysql:host=sql104.hstn.me;port=3306;dbname=mseet_41284267_mydb;charset=utf8mb4",
    "mseet_41284267",
    "x2v069mzfDFO"
);

// مهم
$pdo->exec("SET NAMES utf8mb4");

$sql = "INSERT INTO topics (topic) VALUES (:topic)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    "topic" => $topic
]);

echo "added: ".$topic;

?>