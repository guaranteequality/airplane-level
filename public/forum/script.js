$(document).ready(function(){
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    tinymce.init({ selector:'textarea' });
});
function reply_up(id){
    $.ajax({
    url: "/forum/replyup",
    method: 'post', 
    data:{replyid:id},            
    success: function(result){

    console.log(result);
    }}); 
}
function reply_down(id){
    $.ajax({
        url: "/forum/replydown",
        method: 'post', 
        data:{replyid:id},            
        success: function(result){

            console.log(result);
    }});
}