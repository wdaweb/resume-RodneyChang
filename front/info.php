<?php

include_once "base.php";

$sql="select * from backend where id=1";
$info=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

echo '生日：'.$info['birth'];
echo '<br>';
echo '電話：'.$info['tel'];
echo '<br>';
echo '郵件：'.$info['email'];
echo '<br>';
echo '居住地：'.$info['lo'];
echo '<br>';
echo '學歷：'.$info['school'];
echo '<br>';
echo '工作：'.$info['job'];




?>