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
      $id =Personal;
      $sum = 0;
        $total = 0;
        $digi = 13;
        
        for($i=0; $i<12; $i++){
            $sum = $sum + ($id[$i]) * $digi;
            $digi--;
        }
        $total = (11 - ($sum % 11)) % 10;
        
        if($total != $id[12]){ //ตัวที่ 13 มีค่าไม่เท่ากับผลรวมจากการคำนวณ ให้ add error
           $("#per_id").html("<span style='color:red'>หมายเลขบัตรประชาชนไม่ถูกต้อง </span>");
        }else{
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
/*    


        
  */
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
$(function(){
   $("#prefix").change(function(){
    var prefix = $("#prefix ").val();
  
    if (prefix !=1) {
      $("#radio_2").prop("checked", true)
    }else {
      $("#radio_1").prop("checked", true)
    
    }
   });
});
$(function () {
$("#radio_1").change(function(){
  var radio_1 =$("#radio_1").val();
  
  if (radio_1=1) {
    $("#prefix").val("1");
  }else{
    $("#prefix").val("3");
  }
});
});
$(function () {
$("#radio_2").change(function(){
  var radio_2 =$("#radio_2").val();
  
  if (radio_1=2) {
    $("#prefix").val("3");
  }else{
    $("#prefix").val("1");
  }
});
});
function delete_user_form(){
  if(confirm("คุณต้องการลบข้อมูลหรือไม่")){
  $.ajax({
    type:"POST",
    url:"after_100.php",
    data:$("#delete_user").serialize(),
    success:function(data){
      
      //close modal
      $(".close").trigger("click");
      
      //show result
      alert(data);


      
      //reload page
      location.reload();
    }
  });
}
  return false;
}


function change_answer(id){
 
    $.ajax({
      type:"POST",
      url:"after_100_1.php",
       data:{change_answer:id},
       
      success:function(data){
        
      $("#ans_form").html(data);

      }
    });
  
  return false;
}

function chang_answer_edit(){
 
  $.ajax({
    type:"POST",
    url:"after_100_1.php",
    data:$("#chang_answer_edit").serialize(),
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