 $('.pgwSlider1').pgwSlider();
 $('.pgwSliders').pgwSlider();
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var documentheight=$(document).height();
    var mainheight=$('main').height();
    var headerheight=$('.header').height();
    var footerheight=$('footer').height();
    var pageheight=$('.page').height();
    if(pageheight<1000){
//               $("main").height(documentheight-headerheight-footerheight);
    }
    console.log(documentheight);
    
   
     tab_slide();
    $(document).on('click', '#openLogin', function(){

        $('.jquery-modal.blocker.current').css('display', 'inherit');

    });

    $(document).on('click', '.close-modal', function(){

        $('.jquery-modal.blocker.current').css('display', 'none');

    });

    $("#btn-quicksearch-search").click(quickSearch);
    $( "#quicksearch" ).keypress(function( event ) {
        if ( event.which == 13 ) {
            quickSearch();
        }

    });

});
function quickSearch(){
    var searchKey=$("#quicksearch").val();
    if(searchKey.includes("/")){
        errorToast("Cannot search: not include '/' in searchKey.")
    }else{
        if(searchKey!=''){

            location.href="/search/"+searchKey; 
        }   
        else{
            errorToast("Cannot search: Please Input searchKey.")
        }
    }


}
function tab_slide(){

    $('.tab_slide').hide();
    $('.tab_slide.active').show();

    $('.subnav__item').click(function(){
        //        alert('hello');
        $('.subnav__item').removeClass('subnav__item--active');
        $(this).addClass('subnav__item--active');
        var show_tab=$(this).attr("data-link");
        console.log(show_tab);
        $(".tab_slide").hide();
        $(".tab_slide#"+show_tab).show();

    }); 
}


function like_photo(id){
    console.log(id);
    $.ajax({
        url: "/likephoto",
        method: 'post', 
        data:{photoid:id},            
        success: function(result){
            if(result.status==1){
                
            $(".fav_count").each(
                function(){
                $(this).html(result.fav_count);
            });
            successToast(result.message);
            }   
            else{
                errorToast(result.message);
            }
            
            
    }});
}
 