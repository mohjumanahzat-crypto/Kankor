<?php
$pdo = new PDO(
  "mysql:host=127.0.0.1;dbname=mydb;charset=utf8",
  "root",
  ""
);
$sql = "
CREATE TABLE test (
  id INT AUTO_INCREMENT PRIMARY KEY,

    b1 VARCHAR(2),    
    b2 VARCHAR(2),    
    b3 VARCHAR(2),    
    b4 VARCHAR(2)  
)";
$pdo->exec($sql);
    echo "جدول ساخته شد";
?>