<?php

include_once "base.php";

$sql="select * from backend where id=1";
$info=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);


echo '自傳：'.$info['biography'];




?>