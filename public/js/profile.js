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
        $("#uploadform").ajaxSubmit({url: '/userphotoupload', type: 'post' , success:function(result){
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
 
});
 $("#profileSubmit").click(function(){
//      alert("Hello");
       $("#profileform").ajaxSubmit({url: '/profilesave', type: 'post' , success:function(result){
//                      alert(result);
            
            if(result.status=="1"){
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
   $("#btnChangPass").click(function(){
//      alert("Hello");
       if($("#CurrentPass").val()=='') {
            errorToast("Please input Current Password");
           return;
       }
       if($("#NewPass").val()=='') {
            errorToast("Please input New Password");
           return;
       }
       if($("#ConfirmPass").val()=='') {
            errorToast("Please Confirm New Password");
           return;
       }
       if($("#NewPass").val()!=$("#ConfirmPass").val()){
            errorToast("Confirm New Password.")
           return;
       }
       $("#changePassform").ajaxSubmit({url: '/changepass', type: 'post' , success:function(result){
//                      alert(result);
            if(result.status=="1"){
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