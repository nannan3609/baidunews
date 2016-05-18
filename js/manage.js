$(".right").load("form.html");
$(".left tr").each(function(index){
	var trNode=$(this);
            trNode.click(
            	function(){
               	$(".left  .in").removeClass("in");
                        $(".left .on").removeClass("on");
                        trNode.addClass("in");
                        $(".left .in  span").addClass("on");
                        if(index==0){
                        $(".right").load("form.html");}
                        else if(index==1){
                            $(".right").load("php/manage.php?index=0");
                        }
                        else if(index==2){
                             $(".right").load("php/manage.php?index=1");
                        }
                        else if(index==3){
                            $(".right").load("php/manage.php?index=2");
                        }
                        else if(index==4){
                            $(".right").load("php/manage.php?index=3");
                        }
                        else{
                             $(".right").load("php/manage.php?index=4");
                        };
                        // 载入页面
                  }
             );
});




