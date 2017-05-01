
///////////////////////////////////Department////////////////////////////////////////
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


      location.replace("Tables1");
      //reload page
      
    }
  });
}
  return false;
}
function show_department(id){
  $.ajax({
        type:"POST",
        url:"ckAjax.php",
        data:{show_department:id},
      success:function(data)
      {
        $("#dept_form").html(data);

      }
  });
    return false;

}

function edit_dept_form(){
  $.ajax({
    type:"POST",
    url:"ckAjax.php",
    data:$("#edit_dept_data").serialize(),
    success:function(data){
      
     
      
      //show result
      alert(data);


      location.replace("Tables1");
      //reload page
      
    }
  });
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




///////////////////////////Data Table///////////////////////////////////////////////////
$(document).ready(function() {
    $('#myTable').DataTable( {
        "order": [[ 5, "asc" ]]
    } );
} );
$(document).ready(function() {
    $('#myTable1').DataTable();
} );
$(document).ready(function() {
    $('#myTable2').DataTable();
} );






$( function() {
    $( "#datepicker" ).datepicker({
    dateFormat: 'dd/mm/yy',
    changeMonth: true,
    changeYear: true
  });
});
  $( function() {
    $( "#timepicker" ).timepicker({ timeFormat: 'HH:mm' });
  } );
  $( function() {
    $( "#timepicker1" ).timepicker({ timeFormat: 'HH:mm' });
  } );
///////////////////////////////Delete//////////////////////////////////////

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

function edit_user_form(){
  $.ajax({
    type:"POST",
    url:"ckAjax.php",
    data:$("#edit_user_form").serialize(),
    success:function(data){
      
     
      
      //show result
      alert(data);


      location.replace("Tables");
      //reload page
      
    }
  });
  return false;
}
////////////////////////////////////////////////////////////////







////////////////////////////////////////////////////////////////
function edit_user_form1(){ //มี 2 อันเพราะติดสิทธิ์ 
  $.ajax({
    type:"POST",
    url:"ckAjax.php",
    data:$("#edit_user_form").serialize(),
    success:function(data){
      
     
      
      //show result
      alert(data);


       location.reload();
      //reload page;
      
    }
  });
  return false;
}
////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////
function show_add_question(id){
  $.ajax({
        type:"POST",
        url:"AddQuest.php",
        data:{show_add_quest:id},
      success:function(data)
      {
        $("#quest_form").html(data);

      }
  });
    return false;

} 
function add_question(){ //มี 2 อันเพราะติดสิทธิ์ 
  $.ajax({
    type:"POST",
    url:"AddQuest.php",
    data:$("#add_quest").serialize(),
    success:function(data){
      
     
      
      //show result
      alert(data);
      location.reload();


      
      //reload page
      
    }
  });
  return false;
}
