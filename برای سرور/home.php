<?php
header("Content-Type: text/html; charset=UTF-8");
$pdo = new PDO(
    "mysql:host=sql104.hstn.me;dbname=mseet_41284267_mydb;charset=utf8mb4",
    "mseet_41284267",
    "x2v069mzfDFO",
    [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
    ]
);

$stmt = $pdo->query("SELECT * FROM topics ORDER BY id DESC");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    echo $row['topic']."<hr ><br><br>";
}

?>