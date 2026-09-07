<?php
$pdo = new PDO(
"mysql:host=127.0.0.1;dbname=mydb;charset=utf8",
"root",
""
);

$stmt = $pdo->query("SELECT * FROM topics ORDER BY id DESC");

while ($row = $stmt->fetch())
{
    echo "<div>". $row['topic']."</div><hr >🦸<br><br> ";
    //if ($row['username']=="a")
    //{
    // }
}

?>