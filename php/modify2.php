<?php 
    require_once("connect.php");
          // 数据库连接
    $table=$_REQUEST['table'];
    $num=$_REQUEST['num'];
    $title=addslashes($_REQUEST['title']);
    $img=$_REQUEST['img'];
    $content=addslashes($_REQUEST['content']);
    $sql="UPDATE " .$table." SET  `title`='".$title."',`img`='".$img."',`content`='".$content."' WHERE id=". $num;
    $result=mysql_query($sql);
     if(!$result){
            die('wrong'.mysql_error());
     }
     else{
            echo '<script type="text/javascript">
              alert("提交成功");
              window.location.href="../manage.html";
            </script>';
      };
      mysql_close($con);
?>
