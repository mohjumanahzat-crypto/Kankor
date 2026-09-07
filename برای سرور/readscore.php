<?php
echo '      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">';
$pdo = new PDO(
        "mysql:host=sql104.hstn.me;port=3306;dbname=mseet_41284267_mydb;charset=utf8mb4",
        "mseet_41284267",
        "x2v069mzfDFO"
    );


$stmt = $pdo->query("SELECT * FROM score");

while ($row = $stmt->fetch())
{
    echo $row['username'] . "<br> <hr >" . $row['score'] ."<br> <hr >" . "<br> <hr >" . $row['id'] ."🦸<br><br> ";
    //if ($row['username']=="a")
    //{
    // }
}
?>