<?php
$pdo = new PDO(
  "mysql:host=127.0.0.1;dbname=mydb;charset=utf8",
  "root",
  ""
);
$sql = "
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(200),
    email VARCHAR(200),
    password VARCHAR(255)
)";
$pdo->exec($sql);
    echo "جدول ساخته شد";
?>