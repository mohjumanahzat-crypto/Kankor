<?php
$pdo = new PDO(
        "mysql:host=sql104.hstn.me;port=3306;dbname=mseet_41284267_mydb;charset=utf8mb4",
        "mseet_41284267",
        "x2v069mzfDFO"
    );

$sql = "DELETE FROM topics WHERE id=3";   // نام جدول

$pdo->exec($sql);

echo "مقاله حذف شد";
?>