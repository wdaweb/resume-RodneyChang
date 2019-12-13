<?php
    include_once "base.php";

    $sql="select * from backend where id=1";
    $info=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio-Front</title>
   
    <script src="./js/js.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet"> 

      <style>
        *{
            font-family: 'Noto Sans TC', sans-serif;
        }
      </style>
</head>         
            <body>
            <form action="login.php" method="POST">
            <div id="main"> 
                    <input type="submit" value="登入" id="logbtn"> 
                <div id="self">
                    <img src="img/photo.png" alt="" style="width:180px;height:180px">
                    <div class=header style="line-height:20px;margin-top:70px">
                    <h2>張仕辰</h2>
                    <span >・Location:Taishan</span>&nbsp<span>・justpure01@gmail.com</span>
                    <span>網頁設計學習者<br></span></div>
                </div>
                <div id="selects">
                   <table>
                       <tr>
                          <td><a style="text-decoration:none; color:black ;line-height:25px" href="?do=info" >個人資料</a></td>
                          <td><a style="text-decoration:none; color:black;" href="?do=works">作品</a></td>
                          <td><a style="text-decoration:none; color:black;" href="?do=biography">自傳</a></td>
                       </tr>
                   </table>
                </div>
                <div id="exp">

                
                <?php

                    $do=(!empty($_GET['do']))?$_GET['do']:"info";

                    $path="./front/" . $do . ".php";

                    if(file_exists($path)){
                        include $path;
                    }else{
                        include "./front/info.php";
                    }
                ?>
                </div>
            </div>
        </form>
</body>
</html>

