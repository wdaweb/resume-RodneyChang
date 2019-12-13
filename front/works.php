<?php
    include_once "base.php";

    $table="pics";
    $row=all($table);

    ?>



<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/style.css">
 

<body>
<script src="./js/jquery-3.4.1.min.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>

             
                <div class="cent ar" ><img src="./img/prev.png" onclick="pp(1)" style="width:10px;height:16px" ></div>
                    
                    <?php 
                        $image=all("pics",["sh"=>1]);
                        foreach($image as $key=>$i){
                            echo "<div class='cent im' id='ssaa$key'>";
                            echo " <img src='".$i['pic']."' style='width:150px;height:150px; margin:auto;'>";
                            echo "</div>";
                        }
                    ?>

                 <div class="cent ar"><img src="./img/next.png" onclick="pp(2)" style="width:10px;height:16px"></div>

            <script>
                    var nowpage = 0, num = <?=nums("pics",["sh"=>1]);?>;
						function pp(x) {
                            var s, t;
							if (x == 1 && nowpage - 1 >= 0) { nowpage--; }
							if (x == 2 && (nowpage + 1)  <= num - 3) { nowpage++; }
							$(".im").hide()
							for (s = 0; s <= 2; s++) {
                                t = s * 1 + nowpage * 1;
								$("#ssaa" + t).show()
							}
						}
					pp(1)
            </script>

</body>







  
       
    


