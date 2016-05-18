<?php 
          require_once("connect.php");
          // 数据库连接
           $no=$_REQUEST['num'];
           $num= $_REQUEST['id'];
           if($no==0){
                $sql="DELETE FROM recomment WHERE id=".$num;
                $result=mysql_query($sql);
                if(!$result){
                    die('wrong'.mysql_error());
                }
                else{
            	echo '<script type="text/javascript">
                           alert("删除成功");
                         window.location.href="../manage.html";
                          </script>';
                 }
                 // 删除成功重新加载
            mysql_close($con);
           }
           // 删除数据
           else if ($no==1){
                $sql="DELETE FROM hundred WHERE id=".$num;
                $result=mysql_query($sql);
                if(!$result){
                    die('wrong'.mysql_error());
                }
                else{
            	echo '<script type="text/javascript">
                           alert("删除成功");
                          window.location.href="../manage.html";
                          </script>';
                 }
            mysql_close($con);
        }
        else if($no==2){
        	 $sql="DELETE FROM local WHERE id=".$num;
                $result=mysql_query($sql);
                if(!$result){
                    die('wrong'.mysql_error());
                }
                else{
            	echo '<script type="text/javascript">
                           alert("删除成功");
                          window.location.href="../manage.html";
                          </script>';
                 }
            mysql_close($con);
        }
        else if($no==3){
        	 $sql="DELETE FROM  entertainment WHERE id=".$num;
                $result=mysql_query($sql);
                if(!$result){
                    die('wrong'.mysql_error());
                }
                else{
            	echo '<script type="text/javascript">
                           alert("删除成功");
                        window.location.href="../manage.html";
                          </script>';
                 }
            mysql_close($con);
        }
        else{
        	$sql="DELETE FROM  society WHERE id=".$num;
                $result=mysql_query($sql);
                if(!$result){
                    die('wrong'.mysql_error());
                }
                else{
            	echo '<script type="text/javascript">
                           alert("删除成功");
                          window.location.href="../manage.html";
                          </script>';
                 }
            mysql_close($con);
        };
?>
