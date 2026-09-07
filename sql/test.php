<?php
$pdo = new PDO(
        "mysql:host=sql104.hstn.me;port=3306;dbname=mseet_41284267_mydb;charset=utf8mb4",
        "mseet_41284267",
        "x2v069mzfDFO"
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