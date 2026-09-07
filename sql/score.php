<?php

$pdo = new PDO(
    "mysql:host=sql104.hstn.me;port=3306;dbname=mseet_41284267_mydb;charset=utf8mb4",
    "mseet_41284267",
    "x2v069mzfDFO",
    [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
    ]
);

// اگر جدول قبلاً وجود داشت حذف شود
$pdo->exec("DROP TABLE IF EXISTS score");

$sql = "
CREATE TABLE score (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(200),
  time VARCHAR(200),
  userid VARCHAR(200),
  score VARCHAR(200)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
";

$pdo->exec($sql);

echo 'جدول score ساخته شد و UTF8 فعال است';

?>