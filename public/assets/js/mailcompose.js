(function ($) {
	//change color
	 $(document).ready(function(){		
           getman();

	 });
	$("#sendmyemail").on('click', function(){	
		
		var mainreceptance = $(".mainreceptance").val();	
		//var mainreceptance1 = $(".mainreceptance1").val();	
		//var mainreceptance2 = $(".mainreceptance2").val();	
		var mailsubject = $(".mailsubject").val();	
		var mailbody = $(".mailbody").val();	
		
		 	$.ajax({
			url:"mailcomposer.php",
			method:"POST",
			data:{mainreceptance:mainreceptance,mailsubject:mailsubject,mailbody:mailbody},
			success:function(ret){
				if(ret==1){
					alert("Congratulates! Your message sent");
				}else{
					alert("You are not registered!");
					return false;
				}
				
			}
		});

		});
	  function getman(){
           $.ajax({
            url:"mailcomposer.php",
            method:"POST",
            //data:{mainreceptance:mainreceptance,mailsubject:mailsubject,mailbody:mailbody},
            success:function(ret){
                if(ret==1){
                   
                   
                }else{
                    alert("You are not registered!");
                    return false;
                }
                
            }
        });
      }
})(jQuery);