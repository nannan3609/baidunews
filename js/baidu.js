$("article").load("php/news.php");
$(".content .nav").each(function(index){
    var navNode=$(this);
    navNode.click(
               function(){
               	$(".content  .in").removeClass("in");
                        navNode.addClass("in");
                        $.ajax({
                             	url:'php/news.php',
                             	data:{
                             		index: index
                             	},
                                    dataType:'json',
                             	type:'get',
                             	success:function(data){
                                             console.log(data);
                             	}
                             });
                        //ajax没有传成功
                         if(index==0){
                        $("article").load("php/news.php");
                         }
                        else if(index==1){
                            $("article").load("php/news.php?index=1");
                        }
                        else if(index==2){
                             $("article").load("php/news.php?index=2");
                        }
                        else if(index==3){
                            $("article").load("php/news.php?index=3");
                        }
                        else {
                            $("article").load("php/news.php?index=4");
                        };
               }
    	);
});
