<?php
echo '      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">';
$pdo = new PDO(
"mysql:host=127.0.0.1;dbname=mydb;charset=utf8",
"root",
""
);


$stmt = $pdo->query("SELECT * FROM score");

while ($row = $stmt->fetch())
{
    echo $row['username'] . "<br> " . $row['score'] ."🦸<br><br> ";
    //if ($row['username']=="a")
    //{
    // }
}
?>