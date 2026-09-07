<?php
$pdo = new PDO(
  "mysql:host=127.0.0.1;dbname=mydb;charset=utf8",
  "root",
  ""
);
$sql = "
CREATE TABLE coin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  userid VARCHAR(200)
)";
$pdo->exec($sql);
    echo "جدول ساخته شد";
?>