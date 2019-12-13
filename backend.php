<?php
include_once "base.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet"> 
    <style>
          *{
        font-family: 'Noto Sans TC', sans-serif;
      }

        #square{

            width:200px;
            height:300px;
            background-color:rgb(54, 139, 160);
            filter: drop-shadow(1px 1px 4px rgb(0,0,0,0.3));
            position:relative;
            border-radius:1em;
            display: inline-block; 

        }


        #square1{

            width:450px;
            height:300px;
            background-color:rgb(54, 139, 160);
            filter: drop-shadow(1px 1px 4px rgb(0,0,0,0.3));
            position:absolute;
            border-radius: 1em;
            display: inline-block; 
            margin-left:35px;

        }


        .group{

            width:800px;
            height:60vh;
            margin-top:45px;
            margin:auto;

        }

        .embed{

            position:absolute;
            width: 398px;
            height: 300px;
            text-decoration:none;
            color:rgb(54, 139, 160);
            margin-left: 33px;

        }

        h1{
        color:rgb(54, 139, 160);

        }

        .tag{

            text-decoration-line:none;
            font-size:small;
            color:rgb(54, 139, 160);
        }
    </style>
</head>

    <?php
    
    $sql="select * from backend where id='1'";
    $info=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

 

    ?>

<body>  <div class="group">
    <h1>Edit Profile</h1>
                <form action="backend_api.php" method="POST" >
                    <table class="embed">
                            <tr>
                                <td>電話:<input type="text" size="25" name="tel" id="tel" value="<?=$info['tel'];?>"></td>
                                    <td rowspan="4">
                                        自傳：<textarea rows="12" cols="25" name="biography" id="biography"><?=$info['biography'];?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>生日:<input type="text" size="25" name="birth" id="birth" value="<?=$info['birth'];?>">
                                </td>
                                <tr>
                                    <td>郵件:<input type="text" size="25" name="email" id="email" value="<?=$info['email'];?>">
                                </td>
                                </tr>
                                <tr>
                                    <td>現居地:<input type="text" size="25" name="lo" id="lo" value="<?=$info['lo'];?>"></td>
                                </tr>
                                <tr>
                                    <td>學歷:<input type="text" size="25" name="school" id="school" value="<?=$info['school'];?>"></td>
                                </tr>
                                <tr>
                                    <td>工作經歷:<input type="text" size="25" name="job" id="job" value="<?=$info['job'];?>" ></td>
                                </tr>
                               
                                <br>
                                <br>
                                <a href="frontend.php" class="tag">回前台</a><br>
                                <a href="backend2.php" class="tag">編輯圖片</a>

                                
                                <input type="submit" value="編輯個人資料"><br><br>
                                
                                <input type="hidden" name="id" value="<?=$info['id'];?>"> 
                                
                                
                                
                    </table>
                    
                </form>
            </div>
        </div>
</body>
</html>