(function ($) {
	//change color
	 
	$("#signregister").on('click', function(){		
		var username=$("#myInputname").val();	
		var userid=$("#myInputid").val();	
		var email=$("#myInputEmail1").val();	
		var userpass1=$("#myInputPassword1").val();	
		var userpass2=$("#myInputPassword2").val();	
		if(username==''|| email==''|| userpass2==''){
			alert("You must enter All fields");
			return false;
		}
		if(userpass1==''|| userpass2==''){
			alert("You must enter Same Password");
			return false;
		}
		$.ajax({
			url:"signreg.php",
			method:"POST",
			data:{username:username,userid:userid,userpass:userpass2,email:email},
			success:function(ret){
				if(ret==1){
					alert("Congratulates!");
				}else{
					alert("You are not registered!");
					return false;
				}
				
			}
		});

		});
	
})(jQuery);