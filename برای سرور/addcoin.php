<?php
$id=$_POST["id"];



$pdo = new PDO(
        "mysql:host=sql104.hstn.me;port=3306;dbname=mseet_41284267_mydb;charset=utf8mb4",
        "mseet_41284267",
        "x2v069mzfDFO"
    );
$sql = "INSERT INTO coin (userid)
        VALUES (:userid)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    "userid" => "$id",

]);
    echo "added";
?>