<?php

$form=$_GET["form"];
$l1=$_GET["start"];

$link="forms/form".$form.".html";

$ll=159+$l1;// the condition 160 questions 
$l=1;


echo '      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">';
echo "<body bgcolor='#000000'><font color='white'>";

$pdo = new PDO(
        "mysql:host=sql104.hstn.me;port=3306;dbname=mseet_41284267_mydb;charset=utf8mb4",
        "mseet_41284267",
        "x2v069mzfDFO"
    );


echo " 
<iframe src=$link width='100%' height='40%' style='position: fixed;bottom: 0;left: 0;'>


</iframe>

<h2 align='center'>چهار جواب ها</h2>
";


echo "
<form action='score.php' method='POST' enctype='multiparty/form-data'>
";



while ($l1<=$ll){

$stmt = $pdo->prepare("SELECT * FROM test1 WHERE id = ?");
$stmt->execute([$l1]);

$id = $stmt->fetch(PDO::FETCH_ASSOC);

if ($id){



$b1=$id["b1"];
$b2=$id["b2"];
$b3=$id["b3"];
$b4=$id["b4"];

$z="q".$l;
echo "<div align='right' dir='rtl' style='box-shadow: 0 8px 3px rgba(3, 9, 30, 6);background-color:#333333 ; border-radius: 2%;display: block;'>

$l -  <br>
<input type='radio' name=$z value=$b1 required>    الف 
<input type='radio' name=$z value=$b2 > ب 
<input type='radio' name=$z value=$b3 > ج
<input type='radio' name=$z value=$b4 > د<br><br>
</div><br>
";
}
    $l+=1;
    $l1+=1;
     
}

echo "
<h3 align='center'>انتخاب رشته </h3>
<p>برای لیست رشته ها روی لینک کلیک کنید ، <a href='field.html'>انتخاب رشته </a></p><br>
انتخاب اول   :<input type='number' name='f1' placeholder='کد رشته تان را وارد کنید ' required><br>
انتخاب دوم   :<input type='number' name='f2' placeholder='کد رشته تان را وارد کنید ' required><br>
انتخاب سوم  :<input type='number' name='f3' placeholder='کد رشته تان را وارد کنید ' required><br>
انتخاب چهارم  :<input type='number' name='f4' placeholder='کد رشته تان را وارد کنید ' required><br>
انتخاب پنجم  :<input type='number' name='f5' placeholder='کد رشته تان را وارد کنید ' required>


<input type='hidden' id='iduser' name='userid'>
<script>
var id=localStorage.getItem('userid');

document.getElementById('iduser').value=id; 
</script>
<p align='center'><input type='submit' value='ارسال فرم'></p><br><br>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
";
?>