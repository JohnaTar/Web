/////////////////////////Username/////////////////////////////////////
$(function () {
  $("#UserName").change(function(){
   
    $.ajax({
      url: "ckAjax.php",
      data: "UserName=" + $("#UserName").val(),
      type: "POST",
      dataType :"text",
      
      success: function(html) 
        { 
        if(html ==true){
            
            $("#btnSubmit").attr("disabled",false);
              $("#Password").attr("disabled",false);
                $("#rePassword").attr("disabled",false);
                  $("#Email").attr("disabled",false);
            $("#msg1").html("<span style='color:green'>Usernameใช้งานได้</span>");
            }else if (html ==false) {
              $("#btnSubmit").attr("disabled",true);
                $("#Password").attr("disabled",true);
                  $("#rePassword").attr("disabled",true);
                    $("#Email").attr("disabled",true);
            $("#msg1").html("<span style='color:red'>Usernameใช้งานไม่ได้กรุณากรอกใหม่</span>");

            }
        }
    
      });
    });
  });


///////////////////////////////////Password////////////////////////////////////////


    $(function () {
        $("#rePassword").change(function () {
            var password = $("#Password").val();
            var confirmPassword = $("#rePassword").val();
            
           
            if (password != confirmPassword) {
                $("#verify").html("<font color = 'red'>รหัสผ่านไม่ตรงกัน</font>")
                  $("#btnSubmit").attr("disabled",true);
                    $("#UserName").attr("disabled",true);
                      $("#Email").attr("disabled",true);
                return false;
                return false;
            }else if(password == confirmPassword){
                $("#verify").html("<font color = 'green'>รหัสผ่านตรงกัน</font>")
                  $("#btnSubmit").attr("disabled",false);
                    $("#Email").attr("disabled",false);
                        $("#UserName").attr("disabled",false);
                return false;
            }
         return true;
        });
    });

////////////////////////////////////////Email//////////////////////////////////
$(function () {
  $("#Email").keyup(function(){
   
    $.ajax({
      url: "ckAjax.php",
      data: "Email=" + $("#Email").val(),
      type: "POST",
      dataType :"text",
      
      success: function(html) 
        { 
        if(html ==true){
            
            $("#btnSubmit").attr("disabled",false);
             $("#Password").attr("disabled",false);
                $("#rePassword").attr("disabled",false);
                  $("#UserName").attr("disabled",false);
          
            $("#msg2").html("<span style='color:green'>Emailใช้งานได้</span>");
            }else if (html ==false) {
              $("#btnSubmit").attr("disabled",true);
                $("#Password").attr("disabled",true);
                  $("#rePassword").attr("disabled",true);
                    $("#UserName").attr("disabled",true);
               
            $("#msg2").html("<span style='color:red'>Emailใช้งานไม่ได้กรุณากรอกใหม่</span>");

            }
        }
    
      });
    });
  });

///////////////////////////Data Table///////////////////////////////////////////////////
$(function(){
    $('#myTable').DataTable();
});
///////////////////////////////Delete//////////////////////////////////////
function delete_user(id){
  if(confirm("คุณต้องการลบข้อมูลหรือไม่")){
    $.ajax({
      type:"POST",
      url:"ckAjax.php",
      data:{delete:id},
      success:function(data){
        alert(data);
        location.reload();
      }
    });
  }
  return false;
}
//////////////////////////////////Add User////////////////////////////////////////
function add_user_form(){
  $.ajax({
    type:"POST",
    url:"ckAjax.php",
    data:$("#add_user_form").serialize(),
    success:function(data){
      
      //close modal
      $(".close").trigger("click");
      
      //show result
      alert(data);


      
      //reload page
      location.reload();
    }
  });
  return false;
}
/////////////////////////////////Show Data For Edit/////////////////////////////////

 
            
