<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=login";
$pdo=new PDO($dsn,'root','');




if(!empty($_GET['login']) && $_GET['login']=="err"){
  echo "<script>alert('登入失敗')</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet"> 
  <style>
  
      *{
        font-family: 'Noto Sans TC', sans-serif;
      }

      .reg{

      width:300px;
      height:300px;
      background:white;
      filter:drop-shadow(1px 1px 4px rgba(75, 130, 120, 0.7));
      border-radius:10%;
      margin:auto;
      box-sizing:border-box;
      color:rgb(95, 150, 120);
      margin-top:150px;

      }

      table{

        padding:10px;

      }

      .ct{

        margin:auto;
        display: inline-block;
        position:absolute;
      }

      .logbtn1{

        box-sizing: border-box;
        padding: 1px 7px 2px;
        border-width: 1px;
        border-color: rgb(54, 139, 160) rgb(54, 139, 160) rgb(54, 139, 160);
        cursor: pointer;
        margin-left: 60px;
        
      }

      .logbtn2{

        box-sizing: border-box;
        padding: 1px 7px 2px;
        border-width: 1px;
        border-color: rgb(54, 139, 160) rgb(54, 139, 160) rgb(54, 139, 160);
        cursor: pointer;
        margin-left: 60px;

        }


      a{
        text-decoration: none;
        color:lightskyblue;
      }
      
  </style>



</head>

<body>

<form action="login_api_.php" method="POST">
 
    <table class="reg">
    <tr>
      <td>
        <h1 style=text-align:center>履歷登入</h1>
      </td>
    </tr>
        <tr>
          <td style=text-align:center;line-height:20px>帳號：<input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
          <td style=text-align:center;line-height:20px>密碼：<input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
          <td class="ct">
              <input type="submit" value="登入" class="logbtn1">
              <input type="reset" value="取消" class="logbtn2">
              
          </td>
        </tr>
      </table>
</form>

</body>
</html>