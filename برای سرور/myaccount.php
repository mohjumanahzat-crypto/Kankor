<?php
$id=$_POST["id"];



$pdo = new PDO(
        "mysql:host=sql104.hstn.me;port=3306;dbname=mseet_41284267_mydb;charset=utf8mb4",
        "mseet_41284267",
        "x2v069mzfDFO"
    );


$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);




if ($user) {
    echo "ID : ". $user['id']."<br>name : ". $user['username'] . "<br>";
    echo "email : ". $user['email']."<br>";
    echo "password : ".$user['password']."<br><br><br>";


$stmt1 = $pdo->query("SELECT * FROM score ORDER BY id DESC");

while ($row = $stmt1->fetch())
{

    if ($row['userid']==$id)
    {
    echo "<hr > <p>نمرات تان ☺️</p> <br> Name :".$row['username']."<br>" ;
    echo "<p>زمان که شما آزمون را گذراندید :</p> ".$row['time']."<br>" ;   
    echo "<p>نمبر شما  :</p> ".$row['score']."<br><br>" ;   

     }
}

echo " <br><br><br><br> <br><h3 align='center'>افرادیکه بالای ۳۰۰ نمبر را اخذ کردند !</h3><hr ><br>";
$stmt2 = $pdo->query("SELECT * FROM score ORDER BY id DESC");

while ($row1 = $stmt2->fetch())
{

    if ($row1['score']>=300)
    {
    echo "<p>بهترین امتیازات ☺️</p> <br> Name :".$row1['username']."<br>" ;
    echo "<p>زمان که شما آزمون را گذراندید :</p> ".$row1['time']."<br>" ;   
    echo "<p>نمبر شما  :</p> ".$row1['score']."<br><br>" ;   

     }
}




} else {
    echo "User not found";
}
?>