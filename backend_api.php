<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet"> 
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=login";
$pdo=new PDO($dsn,'root','');


$id=$_POST['id'];
$birth=$_POST['birth'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$lo=$_POST['lo'];
$school=$_POST['school'];
$job=$_POST['job'];
$biography=$_POST['biography'];



$sql="UPDATE `backend` set `tel`='$tel',`birth`='$birth',`email`='$email', `lo`='$lo', `school`='$school', `job`='$job', `biography`='$biography' where id='$id'";

$pdo->exec($sql);
header("location:backend.php");



?>