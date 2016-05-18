<?php 
         require_once("connect.php");
          // 数据库连接
           $table=$_REQUEST['table'];
           $title=$_REQUEST['title'];
           $img=$_REQUEST['img'];
           $content=$_REQUEST['content'];
           if($img==NULL ){
                   $sql="INSERT INTO ".$table." ( title, img, content) VALUES ( '".$title."','','".$content."')";
           }
           else if($content==NULL  ){
           		 $sql="INSERT INTO ".$table." ( title, img, content) VALUES ( '".$title."','".$img."','')";
           }
           else{
                   $sql="INSERT INTO ".$table." ( title, img, content) VALUES ( '".$title."','".$img."','".$content."')";
         };
       // 插入数据 
          $result=mysql_query($sql);
           if(!$result){
                    die('wrong'.mysql_error());
            }
            else{
            	echo '<script type="text/javascript">
                           alert("提交成功");
                          window.location.href="../manage.html";
                          </script>';
            }
            mysql_close($con);
 ?>
 