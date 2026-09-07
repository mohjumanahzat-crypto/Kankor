<?php
$pdo = new PDO(
  "mysql:host=127.0.0.1;dbname=mydb;charset=utf8",
  "root",
  ""
);


$xml= simplexml_load_file("questions.xml");

foreach ($xml->a as $row){

    $b1= $row->b1;
    $b2= $row->b2;
    $b3= $row->b3;
    $b4= $row->b4;

    $n= $row->n;


$sql = "INSERT INTO test (b1 , b2 ,b3 , b4)
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