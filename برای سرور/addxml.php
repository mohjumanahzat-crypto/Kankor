<?php
$pdo = new PDO(
        "mysql:host=sql104.hstn.me;port=3306;dbname=mseet_41284267_mydb;charset=utf8mb4",
        "mseet_41284267",
        "x2v069mzfDFO"
    );

$xml= simplexml_load_file("questions.xml");

foreach ($xml->a as $row){

    $b1= $row->b1;
    $b2= $row->b2;
    $b3= $row->b3;
    $b4= $row->b4;

    $n= $row->n;


$sql = "INSERT INTO test1 (b1 , b2 ,b3 , b4)
        VALUES (:b1 ,:b2 ,:b3 ,:b4 )";

$stmt = $pdo->prepare($sql);
$stmt->execute([

    "b1" => "$b1",
    "b2" => "$b2",
    "b3" => "$b3",
    "b4" => "$b4"
]);
echo "$n";
}
        echo "آپلود شد روی سرور";
?>