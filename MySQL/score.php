<?php
$pdo = new PDO(
  "mysql:host=127.0.0.1;dbname=mydb;charset=utf8",
  "root",
  ""
);
$sql = "
CREATE TABLE score (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(200),
  time VARCHAR(200),
  userid VARCHAR(200),
  score VARCHAR(200)
)";
$pdo->exec($sql);
    echo "جدول ساخته شد";
?>