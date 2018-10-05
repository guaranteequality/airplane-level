$.uploadPreview({
    input_field: "#image-upload",   // Default: .image-upload
    preview_box: "#image-preview",  // Default: .image-preview
    label_field: "#image-label",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false                 // Default: false
});
$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#btnUploadPhoto").click(function(e){
        $("#uploadform").ajaxSubmit({url: '/upload', type: 'post' , success:function(result){
//                      alert(result);
            if(result.status=="success"){
                //            alert("good");
                successToast(result.message)
            }
            else{
//                alert("Hello");
                errorToast(result.message)
                //            alert("false");
            }
        }});
    });
    $("#Country").change(getAirport);
    $("#aircraftmanu").change(getAircrafttype);
    $("#aircrafttype").change(getAircraft);
    $("#AirlineCategory").change(getAirline);

    function getAirport(){    
        var countryid=$("#Country").val();
        //        console.log(countryid);
        $.ajax({
            url: "/getAirport",
            method: 'post', 
            data:{countryid:countryid},            
            success: function(result){
                var len=result.data.length;
                //                console.log(len);
                var html='<option value="0">Please Select Airport</option>';
                for(i=0;i<len;i++){
                    //                                        console.log(result.data[i]);
                    html+='<option value="'+result.data[i].id+'">'+result.data[i].name+'</option>';

                }
                $("#Airport").html(html);
                //jQuery('.alert').show();
                //jQuery('.alert').html(result.success);
        }});  
    }

    function getAircrafttype(){    
        var aircraftmanu=$("#aircraftmanu").val();
        //        console.log(countryid);
        $.ajax({
            url: "/getAircrafttype",
            method: 'post', 
            data:{aircraftmanu:aircraftmanu},            
            success: function(result){
                var len=result.data.length;
                //                console.log(len);
                var html='<option value="0">Please Select AircraftType</option>';
                for(i=0;i<len;i++){
                    //                                        console.log(result.data[i]);
                    html+='<option value="'+result.data[i].id+'">'+result.data[i].Name+'</option>';

                }
                $("#aircrafttype").html(html);
                getAircraft();
                //jQuery('.alert').show();
                //jQuery('.alert').html(result.success);
        }});  
    }
    function getAircraft(){    
        var aircrafttype=$("#aircrafttype").val();
        //        console.log(countryid);
        $.ajax({
            url: "/getAircraft",
            method: 'post', 
            data:{aircrafttype:aircrafttype},            
            success: function(result){
                var len=result.data.length;
                //                console.log(len);
                var html='<option value="0">Please Select AircraftType</option>';
                for(i=0;i<len;i++){
                    //                                        console.log(result.data[i]);
                    html+='<option value="'+result.data[i].id+'">'+result.data[i].Name+'</option>';

                }
                $("#aircraft").html(html);
                //jQuery('.alert').show();
                //jQuery('.alert').html(result.success);
        }});  
    }
    function getAirline(){    
        var AirlineCategory=$("#AirlineCategory").val();
        //        console.log(countryid);
        $.ajax({
            url: "/getAirline",
            method: 'post', 
            data:{AirlineCategory:AirlineCategory},            
            success: function(result){
                var len=result.data.length;
                //                console.log(len);
                var html='<option value="0">Please Select AircraftType</option>';
                for(i=0;i<len;i++){
                    //                                        console.log(result.data[i]);
                    html+='<option value="'+result.data[i].id+'">'+result.data[i].Name+'</option>';

                }
                $("#Airline").html(html);
                //jQuery('.alert').show();
                //jQuery('.alert').html(result.success);
        }});  
    }


});