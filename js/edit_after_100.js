$(function () {
  $("#Personal_ID").change(function(){
    var Personal = $("#Personal_ID").val();
    if (Personal.length <13) {
  $("#per_id").html("<span style='color:red'>กรุณากรอกเลขบัตรประชาชนให้ครบ  13 หลัก</span>");
             $("#btnSubmit").attr("disabled",true);
                $("#Password").attr("disabled",true);
                  $("#rePassword").attr("disabled",true);
                    $("#UserName").attr("disabled",true);
                       $("#Email").attr("disabled",true);
    }else if (Personal.length >13)  {

              $("#btnSubmit").attr("disabled",true);
                $("#Password").attr("disabled",true);
                  $("#rePassword").attr("disabled",true);
                    $("#UserName").attr("disabled",true);
                       $("#Email").attr("disabled",true);
        
        $("#per_id").html("<span style='color:red'>กรุณากรอกเลขบัตรประชาชน  13 หลัก  </span>");
    }else if (Personal.length =13) {
        $.ajax({
      url: "after_100.php",
      data: "Personal_ID=" + $("#Personal_ID").val(),
      type: "POST",
 success: function(data) 
        {  
          if(data ==true){
            
            $("#btnSubmit").attr("disabled",false);
             $("#Password").attr("disabled",false);
                $("#rePassword").attr("disabled",false);
                  $("#UserName").attr("disabled",false);
                     $("#Email").attr("disabled",false);
                    

          
            $("#per_id").html("<span style='color:green'>เลขบัตรประชาชนใช้งานได้</span>");
            }else if (data ==false) {
              $("#btnSubmit").attr("disabled",true);
                $("#Password").attr("disabled",true);
                  $("#rePassword").attr("disabled",true);
                    $("#UserName").attr("disabled",true);
                       $("#Email").attr("disabled",true);
                        
               
            $("#per_id").html("<span style='color:red'>เลขบัตรประชาชนไม่สามารถใช้งานได้</span>");

            }
    
        }
    
            });
  
         }
    });
  });
$(function () {
  $("#Email").change(function(){
    var email = $("#Email").val();
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (regex.test(email)) {
     $.ajax({
      url: "ckAjax.php",
      data: "Email=" + $("#Email").val(),
      type: "POST",
   
      
      success: function(data) 
        { 
        if(data ==true){
            
            $("#btnSubmit").attr("disabled",false);
             $("#Password").attr("disabled",false);
                $("#rePassword").attr("disabled",false);
                  $("#UserName").attr("disabled",false);
                    $("#Personal_ID").attr("disabled",false);

          
            $("#msg2").html("<span style='color:green'>Emailใช้งานได้</span>");
            }else if (data ==false) {
              $("#btnSubmit").attr("disabled",true);
                $("#Password").attr("disabled",true);
                  $("#rePassword").attr("disabled",true);
                    $("#UserName").attr("disabled",true);
                         $("#Personal_ID").attr("disabled",true);
               
            $("#msg2").html("<span style='color:red'>Emailใช้งานไม่ได้กรุณากรอกใหม่</span>");

            }
        }
    
      });
  }else{
    $("#msg2").html("<span style='color:red'>กรุณากรอกอีเมลล์ให้ถูกต้อง</span>");
      $("#btnSubmit").attr("disabled",true);
                $("#Password").attr("disabled",true);
                  $("#rePassword").attr("disabled",true);
                    $("#UserName").attr("disabled",true);
                         $("#Personal_ID").attr("disabled",true);
  }
      
   

    });
  });