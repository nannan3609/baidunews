<!DOCTYPE html>
<html>
<head>
       <meta charset="utf-8"/>
</head>
<body>
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
                   };
                    echo '<a  href="php/modify.php?id='.$row[id] . '&num='.$no.'">修改数据</a><br/>';
                    // 修改数据
                    echo '<a href="php/del.php?id='.$row[id] . '&num='.$no.'">删除数据</a>'."</div>";
                    // 删除按钮
                   };
           }
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
                   };
                    echo '<a href="php/modify.php?id='.$row[id] . '&num='.$no.'">修改数据</a><br/>';
                    // 修改数据
                    echo '<a href="php/del.php?id='.$row[id] . '&num='.$no.'">删除数据</a>'."</div>";
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
                   };
                      echo '<a href="php/modify.php?id='.$row[id] . '&num='.$no.'">修改数据</a><br/>';
                    // 修改数据
                     echo '<a href="php/del.php?id='.$row[id] . '&num='.$no.'">删除数据</a>'."</div>";
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
                   };
                    echo '<a href="php/modify.php?id='.$row[id] . '&num='.$no.'">修改数据</a><br/>';
                    // 修改数据
                    echo '<a href="php/del.php?id='.$row[id] . '&num='.$no.'">删除数据</a>'."</div>";
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
                   };
                    echo '<a href="php/modify.php?id='.$row[id] . '&num='.$no.'">修改数据</a><br/>';
                    // 修改数据
                    echo '<a href="php/del.php?id='.$row[id] . '&num='.$no.'">删除数据</a>'."</div>";
                   };
                 };
          mysql_close($con);
?>
</body>
</html>
