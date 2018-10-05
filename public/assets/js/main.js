(function ($) {
	//change color
	$(document).ready(function(){		
	$("#id01").show();
	});
	$("#loginbtn").on('click', function(){		
		var username=$("#usrname").val();	
		var userpass=$("#psw").val();	
		if(username==''|| userpass==''){
			alert("You must enter Your Username and Password");
			return false;
		}
		$.ajax({
			url:"login.php",
			method:"POST",
			data:{username:username,userpass:userpass},
			success:function(ret){
				if(ret==1){
					alert("Congratulate!");
					$("#id01").hide();
				}else{
					alert("You are not registered!");
					return false;
				}
				
			}
		});

		});
	
})(jQuery);