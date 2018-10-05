jQuery(document).ready(function(){
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



}); 

function view(id){
    $(".preview_"+id).modal('show');
    
}      
function remove(id){
    $('.removemodal').modal('show');
    $(".btnYes").attr("forumid",id);

}

$(".btnYes").click(function(){
    var forumid=$(this).attr("forumid") ;
    $.ajax({
        url: "/admin/photodelete",
        method: 'post', 
        data:{forumid:forumid},            
        success: function(result){
            var selector = ".userdata_" + forumid; 

            $('.removemodal').modal('hide');
            $( selector ).hide( "slow", function() {
                $(selector).remove();
            });
            console.log(result);
    }});
});
