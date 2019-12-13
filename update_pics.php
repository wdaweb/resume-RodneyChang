<?php

include_once "base.php";


$table=$_GET['table'];
$id=$_GET['id'];
$data=find($table,$id);

if(!empty($_FILES['pics']['tmp_name'])){
    $data['pic']="./image".$_FILES['file']['name'];


    move_uploaded_file($FILES['pics']['tmp_name'],".".$data['image']);
    save($table,$data);
}

// to("backend2.php");
?>

<form action="update_pics.php" method="POST">
<table>
    <tr>
        <td>圖片</td>
        <td>說明</td>
        
    </tr>
<?php
    $table = "pics";
    $rows=all($table);
    foreach($rows as $r){

    ?>
    <tr>
        <td><img src="<?=$r['pic'];?>" style="width:100px;height:68px"></td>
        <td>
            <input type="text" name="note[]" value="<?=$r['note'];?>">
            <input type="hidden" name="id" value="<?=$r['id'];?>">
        </td>
    </tr>
   
</table>
<?php
    }
    ?>

<table>
    <tr>
        <td><input type="hidden" name="table" value="<?=$table;?>"></td>
        <td></td>
        <td><input type="submit" value="更新圖片"></td>
        <td><input type="reset" value="重置"></td>
    </tr>  
</table> 
</form>
