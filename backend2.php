<?php

include_once "base.php";
if(!empty($_FILES) && $_FILES['pics']['error']==0){


    $note=$_POST['note'];
    $type=$_FILES['pics']['type'];
    $filename=$_FILES['pics']['name'];
    $path="./img/" . $filename;

    move_uploaded_file($_FILES['pics']['tmp_name'],$path);

    $sql="insert into pics (`pic`,`note`) values('$path','$note')";
    $result=$pdo->exec($sql);

    if($result==1){

        echo "上傳成功";

    }else{

        echo "失敗";
    }
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
        .uploadarea{

            padding-top: 30px;
            width: 700px;
            height: 100px;
            position: relative;
            margin: auto;
            padding-left: 40px;
            color: darkcyan;
            background-color: rgb(230, 242, 245);
        }

        .area2{
            width: 740px;
            height: 513px;
            position: relative;
            margin: auto;
            background-color:white;
            filter:drop-shadow(5px,5px,5px,rgba(0,0,0,0.7));
            border-color:rgb(230, 242, 245);
            margin-top: -22px;
        }
        td{

            
            box-sizing: border-box;
            text-align:center;
        }
       .footer{

        margin:auto;
        width:740px;
        height:80px;
        background-color:rgb(230, 242, 245);
        color:white;
        text-align:center;
       }

       a{
           color:white;
           text-decoration: none;
           color:darkcyan;
       }

       .one{
           height:40px;
           width:185px;
           text-align:center;
           color:darkcyan;
       }
    </style>
</head>
<body>

<form action="backend2.php" method="post" enctype="multipart/form-data">
<div class=uploadarea>
檔案： <input type="file" name="pics"><br>
說明： <input type="text" name="note">
<input type="submit" value="上傳">
</div>

<br>
</form>

<form action="edit_pic.php" method="POST">
<table class="area2">
    <tr>
        <td class="one">圖片</td>
        <td class="one">說明</td>
        <td class="one">顯示</td>
        <td class="one">刪除</td>
    </tr>
    <?php
            $table = "pics";
            $rows=all($table);
            foreach($rows as $r){
                ?>
    <tr>
        <td><img src="<?=$r['pic'];?>" style="width:300px;height:300px"></td>
        
        <td><input type="text" name="note[]" value="<?=$r['note'];?>"></td>
        
        <td><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=($r['sh']==1)?"checked":"";?>></td>
        
        <td><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
        
        <td><input type="hidden" name="id[]" value="<?=$r['id'];?>"></td>
        
        <td><a href="update_pics.php?id=<?=$r['id'];?>&table=<?=$table;?>">更新圖片</a></td>
    </tr>
</form>
    
<?php
    }
    ?>
</table>


        <div class="footer">
            <input type="hidden" name="table" value="<?=$table;?>"> 
            <input type="submit" value="編輯圖片" class="center"></<input>
            <input type="reset" value="重置" class="center"></<input><br>
            <a href="backend.php" class="center">回個人資料編輯頁</a><br>
            <a href="frontend.php" class="center">回前台</a>
        </div>
  



</body>
</html>