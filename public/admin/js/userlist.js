jQuery(document).ready(function(){
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



}); 

function view(id){
    $(".userdatamodal_"+id).modal('show');
    
}
function active(id){
    //    alert(id);
    $.ajax({
        url: "/admin/useractive",
        method: 'post', 
        data:{userid:id},            
        success: function(result){
            var selector = ".userstatus_" + id; 
            var html = '';
            if(result.status == 1){
                html += '<span class="label label-danger text-white">  Active</span> ';                            
            }else{
                html += '<span class="label label-warning text-white">  Inactive</span> '; 
            }
            $(selector).html(html);
            successToast(result.message);
    }});

}
function remove(id){
    $('.removemodal').modal('show');
    $(".btnYes").attr("userid",id);

}

$(".btnYes").click(function(){
    var userid=$(this).attr("userid") ;
    $.ajax({
        url: "/admin/userdelete",
        method: 'post', 
        data:{userid:userid},            
        success: function(result){
            var selector = ".userdata_" + userid; 

            $('.removemodal').modal('hide');
            $( selector ).hide( "slow", function() {
                $(selector).remove();
            });
            console.log(result);
    }});
});
