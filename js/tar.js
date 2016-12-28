$(function () {
  $("#Dept").change(function(){
   
    $.ajax({
      url: "ckAjax.php",
      data: "add_dept=" + $("#Dept").val(),
      type: "POST",
      
      
      success: function(data) 
        { 
        if(data ==true){
            
            $("#btnSM").attr("disabled",false);
              
            $("#msg3").html("<span style='color:green'>ชื่อแผนกใช้งานได้</span>");
            }else if (data ==false) {
              
                $("#btnSM").attr("disabled",true);
               
               
            $("#msg3").html("<span style='color:red'>แผนกนี้มีอยุ่ในระบบแล้ว</span>");

            }
        }
    
      });
    });
  });

function add_dept(){
  if(confirm("คุณต้องการเพิ่มข้อมูลหรือไม่")){
  $.ajax({
    type:"POST",
    url:"ckAjax.php",
    data:$("#Department").serialize(),
    success:function(data){
      
     
      
      //show result
      alert(data);


      location.replace("tables1.php");
      //reload page
      
    }
  });
}
  return false;
}

function delete_dept(id){
  if(confirm("คุณต้องการลบข้อมูลหรือไม่")){
    $.ajax({
      type:"POST",
      url:"ckAjax.php",
      data:{delete2:id},
      success:function(data){
        alert(data);
        location.reload();
      }
    });
  }
  return false;
}

/////////////////////////Username/////////////////////////////////////
$(function () {
  $("#UserName").change(function(){
   
    $.ajax({
      url: "ckAjax.php",
      data: "UserName=" + $("#UserName").val(),
      type: "POST",
      
      
      success: function(data) 
        { 
        if(data ==true){
            
            $("#btnSubmit").attr("disabled",false);
              $("#Password").attr("disabled",false);
                $("#rePassword").attr("disabled",false);
                  $("#Email").attr("disabled",false);
            $("#msg1").html("<span style='color:green'>Usernameใช้งานได้</span>");
            }else if (data ==false) {
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
        $("#pass_form").change(function () {
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
  $("#Email").change(function(){
   
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
          
            $("#msg2").html("<span style='color:green'>Emailใช้งานได้</span>");
            }else if (data ==false) {
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
//////////////////////////////////////////////////////////////////
function edit_user_form(){
  $.ajax({
    type:"POST",
    url:"ckAjax.php",
    data:$("#edit_user_form").serialize(),
    success:function(data){
      
     
      
      //show result
      alert(data);


      location.replace("tables.php");
      //reload page
      
    }
  });
  return false;
}
////////////////////////////////////////////////////////////////

function show_authen(id){
  $.ajax({
        type:"POST",
        url:"ckAjax.php",
        data:{authen:id},
      success:function(data){
          $("#authen_form").html(data);

      }
  });
    return false;

}

function edit_authen(){
  $.ajax({
    type:"POST",
    url:"ckAjax2.php",
    data:$("#save_authen").serialize(),
    success:function(data){

        $(".close").trigger("click");
      
     
      
      //show result
      alert(data);


      location.reload();
      //reload page
      
    }
  });
  return false;
}







////////////////////////////////////////////////////////////////

function cre_room(){
  $.ajax({
    type:"POST",
    url:"ckAjax.php",
    data:$("#CreateRoom").serialize(),
    success:function(data){
      
      //close modal
      
      
      //show result
      alert(data);


      //reload page
      location.reload();
      
    }
  });
  return false;
}
////////////////////////////////////////////////////////////////
function edit_user_form1(){ //มี 2 อันเพราะติดสิทธิ์ 
  $.ajax({
    type:"POST",
    url:"ckAjax.php",
    data:$("#edit_user_form").serialize(),
    success:function(data){
      
     
      
      //show result
      alert(data);


       location.replace("user.php");
      //reload page
      
    }
  });
  return false;
}
////////////////////////////////////////////////////////////////
function save_pass(){ 
  $.ajax({
    type:"POST",
    url:"ckAjax.php",
    data:$("#save_pass").serialize(),
    success:function(data){
      
     
      
      //show result
      alert(data);


       location.replace("user.php");
      //reload page
      
    }
  });
  return false;
}