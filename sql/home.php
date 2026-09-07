<?php

$pdo = new PDO(
    "mysql:host=sql104.hstn.me;dbname=mseet_41284267_mydb",
    "mseet_41284267",
    "x2v069mzfDFO",
    [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
    ]
);

// جدول قدیمی را حذف کن
$pdo->exec("DROP TABLE IF EXISTS topics");

// جدول جدید با پشتیبانی کامل فارسی
$sql = "
CREATE TABLE topics (
  id INT AUTO_INCREMENT PRIMARY KEY,
  topic TEXT
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
";

$pdo->exec($sql);

echo "جدول جدید ساخته شد و فارسی پشتیبانی می‌کند";

?>