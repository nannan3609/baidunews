 <?php
 header("Content-type:text/html;charset=utf-8");
          error_reporting(E_ERROR); 
          ini_set("display_errors","Off"); 
            $con=mysql_connect("localhost","root","");
            // 连接数据库
            mysql_query("set names 'utf8'");
            // 设置编码
            if(!$con){
            	die('Could not connect:'.mysql_error());
            }
           mysql_select_db("new",$con);
            // 选择数据库
?>