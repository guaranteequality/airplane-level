(function ($) {

$(document).ready(function(){	

    getmail();

});
function getmail(){
    $.ajax({
        url:"getmail.php",
        method:"POST",
        //data:{username:username,userid:userid,userpass:userpass2,email:email},
        success:function(ret){
            if(ret){
                var result= JSON.parse(ret);
                var html;
                for(var i = 0; i< result.length;i++){
                    var j=i+1;
                    html+="<tr class='email-status-unread msgget' id='"+j+"' data-email-id='"+j+"' data-email-url='mail-message.html'>"
                    +"<td class='email-checkbox'><div class='custom-control' style='display:none;'>"
                    +"<input type='checkbox' class='custom-control-input'><label class='custom-control-label'><span class='sr-only'></span></label>"
                    +"</div></td><td class='email-star'><span class='email-star-status'>"
                    +"<i class='batch-icon batch-icon-star-alt email-important' data-toggle='tooltip' title='Important Mail'></i>"
                    +"</span></td><td class='email-sender'><b>"+result[i].sender+"</b></td><td class='email-subject'><span class='email-extra-icons'>"
                    // +"<i class='batch-icon batch-icon-spam' data-toggle='tooltip' title='Warning: Junk Mail'></i>"
                    // +"<i class='batch-icon batch-icon-attachment-alt' data-toggle='tooltip' title='Has Attachment(s)'></i>"
                    +"</span>"+result[i].subject+"</td><td class='email-datetime'>"+result[i].data+"</td></tr>";
                    //console.log(sender);

                };
                $("#tableoption").html(html);
                //$("#modal2").html(html1);

            }

        }
    });

}
$(document).on('click','#tableoption tr', function(){		

    var fff=$(this).attr('id');
    //$("#mymodal").show();

    $.ajax({
        url:"getmailbody.php",
        method:"POST",
        data:{id:fff},
        success:function(ret){
            if(ret){
                var result=JSON.parse(ret);
                console.log(result);
                var html1;
                html1 = "<div id='mymodal11111' class='w3-modal w3-animate-opacity'><div class='w3-modal-content w3-card-4'>"
                +"<header class='w3-container'><div class='w3-right'><a href='mail-compose.html'><button class='w3-button w3-white w3-border w3-border-blue w3-round-large'>Reply</button></a><button class='w3-button w3-white w3-border w3-border-red w3-round-large deletebtn' id="+result['id']+">Delete</button></div>" 
                +"<h2>From:"+result['sender']+"</h2></header><div class='w3-container'><p><h3>Subject:"+result['subject']+"</h3></p><h4><p>"+result['body']+"</p></h4>"
                +"</div><footer class='w3-container'><p>"+result['data']+"</p></footer></div></div></div>";
                $("#mymodalgo").html(html1)
                //console.log(html1);
                $("#mymodal11111").show();
                $("#mymodal11111").fadeOut(fast);

            }				
        }
    });
});
$(document).on('click','.deletebtn',function(){
    var fff=$(this).attr('id');
        $.ajax({
        url:"malemanage.php",
        method:"POST",
        data:{id:fff},
        success:function(ret){
            if(ret){
               alert('Succes!');
            }else{
                alert('Failue!');
            }                
        }
    });

    } );
    // When the user clicks anywhere outside of the modal, close it


})(jQuery);