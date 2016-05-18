<?php 
         require_once("connect.php");
          // 数据库连接
           $no= $_REQUEST['index'];
           if($no==0){
                $sql="SELECT  * FROM  recomment  ";
                 $result=mysql_query($sql);
                 if(!$result){
                    die('wrong'.mysql_error());
                 };
                   while($row=mysql_fetch_array($result)){
                    echo "<div class='index-item'>";
                   if($row['img']!=NULL){
                    echo  '<div class="index-list-pic"><img src="'.$row['img'].'"/></div>';
                    };
                    echo '<div class="index-list-main-title">'.$row['title'].'</div>';
                    if($row['content']!=NULL){
                    echo '<div class="index-list-main-abs">'.$row['content']."</div></div>";
                   }else{
                    echo"</div>";
                   };
                   };
           }
           // 显示数据
           else if($no==1){
                  $sql="SELECT  * FROM  hundred  ";
                 $result=mysql_query($sql);
                 if(!$result){
                    die('wrong'.mysql_error());
                 };
                   while($row=mysql_fetch_array($result)){
                 echo "<div class='index-item'>";
                   if($row['img']!=NULL){
                    echo  '<div class="index-list-pic"><img src="'.$row['img'].'"/></div>';
                    };
                    echo '<div class="index-list-main-title">'.$row['title'].'</div>';
                    if($row['content']!=NULL){
                    echo '<div class="index-list-main-abs">'.$row['content']."</div></div>";
                   }else{
                    echo"</div>";
                   };
                   };
           }
           else if($no==2){
                  $sql="SELECT  * FROM  local ";
                 $result=mysql_query($sql);
                 if(!$result){
                    die('wrong'.mysql_error());
                 };
                   while($row=mysql_fetch_array($result)){
                  echo "<div class='index-item'>";
                   if($row['img']!=NULL){
                    echo  '<div class="index-list-pic"><img src="'.$row['img'].'"/></div>';
                    };
                    echo '<div class="index-list-main-title">'.$row['title'].'</div>';
                    if($row['content']!=NULL){
                    echo '<div class="index-list-main-abs">'.$row['content']."</div></div>";
                   }else{
                    echo"</div>";
                   };
                   };
                 }
                else if($no==3){
                  $sql="SELECT  * FROM  entertainment ";
                 $result=mysql_query($sql);
                 if(!$result){
                    die('wrong'.mysql_error());
                 };
                   while($row=mysql_fetch_array($result)){
                   echo "<div class='index-item'>";
                   if($row['img']!=NULL){
                    echo  '<div class="index-list-pic"><img src="'.$row['img'].'"/></div>';
                    };
                    echo '<div class="index-list-main-title">'.$row['title'].'</div>';
                    if($row['content']!=NULL){
                    echo '<div class="index-list-main-abs">'.$row['content']."</div></div>";
                   }else{
                    echo"</div>";
                   };
                   };
                 }
                   else if($no==4){
                  $sql="SELECT  * FROM  society ";
                 $result=mysql_query($sql);
                 if(!$result){
                    die('wrong'.mysql_error());
                 };
                   while($row=mysql_fetch_array($result)){
                    echo "<div class='index-item'>";
                   if($row['img']!=NULL){
                    echo  '<div class="index-list-pic"><img src="'.$row['img'].'"/></div>';
                    };
                    echo '<div class="index-list-main-title">'.$row['title'].'</div>';
                    if($row['content']!=NULL){
                    echo '<div class="index-list-main-abs">'.$row['content']."</div></div>";
                   }else{
                    echo"</div>";
                   };
                   };
                 };
          mysql_close($con);
 ?>

