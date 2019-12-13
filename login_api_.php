
<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=login";
$pdo=new PDO($dsn,'root','');

// print_r($_POST);

$acc=$_POST['acc'];
$pw=$_POST['pw'];
// $username=$_POST['username'];
    
$sql= " SELECT *  FROM `user` WHERE acc='rodney' && pw='1234'" ;
// echo $sql;
$data = $pdo->query($sql)->fetch();
// print_r($pdo);


if( $acc == 'rodney' && $pw == '1234'){

    echo "成功登入";
    header("location:backend.php");

}else{
    
    header("location:login.php?login=err");
    
}




?>
