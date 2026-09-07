<?php
$pdo = new PDO(
        "mysql:host=sql104.hstn.me;port=3306;dbname=mseet_41284267_mydb;charset=utf8mb4",
        "mseet_41284267",
        "x2v069mzfDFO"
    );
$sql = "
CREATE TABLE coin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  userid VARCHAR(200)
)";
$pdo->exec($sql);
    echo "جدول ساخته شد";
?>