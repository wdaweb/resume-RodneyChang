<?php

include_once "base.php";

$table=$_POST['table'];
// echo $table;

$id=$_POST['id'];

foreach($_POST['id'] as $key => $id){

if(!empty($_POST['del'])  &&  in_array($id,$_POST['del'])){

    del($table,$id);

}else{

    $data=find($table,$id);

    $data['note']=$_POST['note'][$key];
    $data['sh']=(in_array($id,$_POST['sh']))?1:0;
}

save($table,$data);
}

to("backend2.php");
?>


