<?php
$id=$_POST["id"];



$pdo = new PDO(
  "mysql:host=127.0.0.1;dbname=mydb;charset=utf8",
  "root",
  ""
);
$sql = "INSERT INTO coin (userid)
        VALUES (:userid)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    "userid" => "$id",

]);
    echo "added";
?>