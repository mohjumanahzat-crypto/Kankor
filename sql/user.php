<?php

$pdo = new PDO(
    "mysql:host=sql104.hstn.me;port=3306;dbname=mseet_41284267_mydb;charset=utf8mb4",
    "mseet_41284267",
    "x2v069mzfDFO",
    [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
    ]
);

// جدول قدیمی را حذف می‌کنیم اگر وجود دارد
$pdo->exec("DROP TABLE IF EXISTS users");

// ساخت جدول جدید با پشتیبانی کامل فارسی
$sql = "
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(200),
  email VARCHAR(200),
  password VARCHAR(255)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
";

$pdo->exec($sql);

echo "جدول users جدید ساخته شد و فارسی پشتیبانی می‌کند";

?>