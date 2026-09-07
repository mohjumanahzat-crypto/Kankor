<?php
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];

$pdo = new PDO(
        "mysql:host=sql104.hstn.me;port=3306;dbname=mseet_41284267_mydb;charset=utf8mb4",
        "mseet_41284267",
        "x2v069mzfDFO"
    );

$sql = "INSERT INTO users (username, email, password )
VALUES (:username, :email, :password )";

$stmt = $pdo->prepare($sql);

$stmt->execute([

"username" => "$username",
"email" => "$email",
"password" => "$password"
]);

$user_id = $pdo->lastInsertId();
echo "$user_id";

?>