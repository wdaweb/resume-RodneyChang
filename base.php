

<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=login";
$pdo=new PDO($dsn,'root','');

function insert($table,$data){
    //把$data的資料新增到資料庫
    global $pdo;
    $row="`" . implode("`,`",array_keys($data)) . "`";
    $value="'" . implode("','",$data) . "'";
    $sql="insert into $table($row) values($value)";
    echo $sql;
    return $pdo->exec($sql);
}



function find($table,...$arg){
    global $pdo;

    $sql="select * from $table where ";
    if(is_array($arg[0])){
        //["acc"=>"mack","pw"=>"1234"];
        foreach($arg[0] as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        //tmp=["`acc`='mack'","`pw`='1234']
        $sql=$sql . implode(" && ",$tmp);
    }else{
        //不是陣列的話預設是id

        $sql=$sql . " id='".$arg[0]."'";
    }
    // echo $sql;

    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}




    function all($table,...$arg){
        global $pdo;

        $sql="select * from $table ";

        if(!empty($arg[0])){
            foreach($arg[0] as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }

            $sql = $sql . " where " . implode(" && ",$tmp);

        }

        if(!empty($arg[1])){
            $sql=$sql . $arg[1];
        }

        // echo $sql . "<BR>";

    return $pdo->query($sql)->fetchAll();


    }


function nums($table,...$arg){

    global $pdo;

    $sql="select count(*) from $table ";

    if(!empty($arg[0])){
        foreach($arg[0] as $key => $value){
            $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }

        $sql = $sql . " where " . implode(" && ",$tmp);

        }
        if(!empty($arg[1])){
            $sql=$sql . $arg[1];
        }

        // echo $sql . "<BR>";

    return $pdo->query($sql)->fetchColumn();
    }

        // echo "資料表筆數<br>";
        // echo nums("admin",["pw"=>"1234"]);




        function q($sql){

            global $pdo;

            return $pdo->query($sql)->fetchAll();
        }

        // print_r(q("select acc from admin "));


        //刪除特定id或符合條件的資料
        function del($table,...$arg){
            global $pdo;

        $sql="delete from $table where ";

        if(is_array($arg[0])){
            //["acc"=>"mack","pw"=>"1234"];
            foreach($arg[0] as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
            //tmp=["`acc`='mack'","`pw`='1234']
            $sql=$sql . implode(" && ",$tmp);
        }else{
            //不是陣列的話預設是id

            $sql=$sql . " id='".$arg[0]."'";
        }
        // echo $sql;

            return $pdo->exec($sql);
        }

        // echo del ("admin",7);
        // echo del ("admin",["acc"=>""]);


        function to($path){
            header("location:".$path);
        }
        //  to("admin.php");


        function save($table,$data){

            global $pdo;

        if(!empty($data['id'])){


            foreach($data as $key => $value){

                if($key!="id"){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
            }
            $sql="UPDATE `$table` SET  ".implode(",",$tmp)." WHERE `id` = '".$data['id']."'";

        }else{
            //insert

            $keys=array_keys($data);
            $keys_str="`" . implode("','",$keys) . "`"; //acc , pw
            $value_str="`" . implode("','",$data) . "`";

            $sql="INSERT INTO `$table`($keys_str) VALUES ($value_str)";
        }

        // echo $sql;
        return $pdo->exec($sql);

        }




?>