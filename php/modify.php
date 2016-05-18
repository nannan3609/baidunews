<!DOCTYPE html>
<html>
<head>
            <meta charset="utf-8"/>
            <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
             <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
</head>
<body>
<?php 
       require_once("connect.php");
          // 数据库连接
        $no=$_REQUEST['num'];
        $num= $_REQUEST['id'];
         if($no==0){
                $sql="SELECT  * FROM  recomment  WHERE id=".$num;
                $table="recomment";
          }
          else if($no==1){
                $sql="SELECT  * FROM  hundred  WHERE id=".$num;
                $table="hundred";
          }
           else if($no==2){
                $sql="SELECT  * FROM  local  WHERE id=".$num;
                 $table="local";
          }
           else if($no==3){
                  $sql="SELECT  * FROM  entertainment WHERE id=".$num;
                  $table=" entertainment";
           }
            else if($no==4){
                  $sql="SELECT  * FROM  society  WHERE id=".$num;
                   $table="society";
           };     
           $result=mysql_query($sql);
            $row=mysql_fetch_array($result);
            if(!$result){
                    die('wrong'.mysql_error());
            };
            $id=$row['id'];
            $title=$row['title'];
            $img=$row['img'];
            $content=$row['content'];
?>
<form action="modify2.php" method="post"  onsubmit="return validateForm()">
         	<div class="form-group">
            <label for="table">新闻块类：</label>
             <?php echo $table ?>
            <input type="hidden" class="form-control" id="table" name="table" placeholder="新闻块类" value=<?php echo $table ?>>
          </div>
           <div class="form-group">
            <label for="table">新闻序号：</label>
            <?php echo $id ?>
            <input type="hidden" class="form-control" id="num" name="num" placeholder="新闻序号" value=<?php echo $id ?>>
           </div>
            <div class="form-group">
            <label for="title">新闻标题：</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="新闻标题" value=<?php echo $title ?> >
         	</div>
         	<div class="form-group">
            <label for="img">新闻图片地址：</label>
            <input type="text" class="form-control" id="img" name="img" placeholder="新闻图片"   value=<?php echo $img ?>>
         	</div>
         	<div class="form-group">
            <label for="content">新闻内容概要：</label>
            <input type="text" class="form-control" id="content"  name="content" placeholder="新闻内容概要" value=<?php echo $content ?> >
         	</div>
         	<button type="submit" class="btn btn-default" id="but">提交</button>
 </form>
 <?php
      echo '  <script type="text/javascript">
              function validateForm(){
                  var x=$("#title").val();
                  var url=$("#img").val();
                  if (x==null || x==""){
                   alert("新闻标题不能为空");
                   return false;
                   }
                   // 新闻标题不能为空
                   else{
                  if(url==null || url==""){
                     return true;
                  }
                  else{
                  if(!isURL(url)){
                     alert("请输入正确的图片地址");
                     return false;
                   }
                }
                }
                // 图片应为http地址
         }
         function isURL(str){
              var reg= /^http:\/\/[A-Za-z0-9]+\.[A-Za-z0-9]+[\/=\?%\-&_~`@[\]\':+!]*([^<>\"\"])*$/; 
               var isurl=reg.test(str);//test(str)方法是js正确表达式内置的对象可以直接调用 
               return isurl; 
         }
         </script>';
      mysql_close($con);
 ?>
</body>
</html>