<?php

$pdo = new PDO(
    "mysql:host=sql104.hstn.me;port=3306;dbname=mseet_41284267_mydb;charset=utf8mb4",
    "mseet_41284267",
    "x2v069mzfDFO"
);

$pdo->exec("ALTER DATABASE mseet_41284267_mydb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

echo "charset دیتابیس تغییر کرد";

?>