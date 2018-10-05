$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    getCountry();


    $("#select_aircraft").select2();
    $("#select_photographer").select2();  
    $("#select_airlines").select2();
    $("#select_airport").select2();

    $("#btnSearch").click(function(){
        var data=new Object();
        data.aircraft=$("#select_aircraft").val();
        data.photographer=$("#select_photographer").val();
        data.airlines=$("#select_airlines").val();
        data.country=$("#select_Country").val();
        data.airport=$("#select_airport").val();
        
        location.href="/search/"+data.aircraft+"/"+data.photographer+"/"+data.airlines+"/"+data.country+"/"+data.airport;
                                                                                                                         
    })


    select_airport
});

function getCountry(){
    $.ajax({
        type:"POST",
        url: "/getcountry",                                
        success: function(result){
            if(result.status == '1'){
                var html = "<option value='0'>All Countries</option>";
                for(var i = 0; i < result.data.length; i++){
                    var item = result.data[i];
                    html += "<option value='" + item.id + "'>";
                    html += item.name + "</option>";
                }                    
                $('select[name=\'country\']').html(html);

                $("#select_Country").select2();
                $("#select_Country").change(function(){
                    var Countryid=$(this).val();
                    console.log(Countryid);
                    $.ajax({
                        type:'POST',
                        url:"/getairport",
                        data:{Countryid:Countryid},
                        success: function(airports){
                            var html1 = "<option value='0'>All Countries</option>";
                            for(var i = 0; i < airports.data.length; i++){
                                var item = airports.data[i];
                                html1 += "<option value='" + item.id + "'>";
                                html1 += item.name + "</option>";
                            }        
                            $("#select_airport").select2('destroy');      
                            $('select[name=\'select_airport\']').html(html1); 
                            $("#select_airport").select2();

                        }
                    }) 
                });
            }else{
                alert("Connect Error!");
            }


        }
    });
}