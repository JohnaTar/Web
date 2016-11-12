<!DOCTYPE html>
    <head>
    <title>Welcome </title>
    <?php include("head/indexhead.php"); ?>
    <script>
///////////////////////////////////////////////////////////////////////////////
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


////////////////////////////////////////////////////////////////////////////////////


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

///////////////////////////////////////////////////////////////////////////////////
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
 

</script>

</head>
    <body>

        <div class="wrapper dark-bg"> 
            <div class="container">

            <div class="img">
                <img src="img/2.png" width="400" height="300"  >
            </div>
           
            <div class="t25-b-white">
                <h3 class="text-center">Safety Training Web Application for Factory Workers</h3>
                <h5 class="text-center">โดย Tarlnwza007</h5>
            </div>
            <br />

            <form class="form" action="checklogin.php" method="POST">
                <input type="text" placeholder="Username"  required="" name="Username" />
                <input type="password" placeholder="Password" required="" name="Password" />
                <button type="submit" class="btn btn-warning">เข้าสู่ระบบ</button> 
                <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">สมัครสมาชิก</button>
                
            </form>
            

            <br />
            <br />
            <br />
            
            

        </div>
    </div>
    <!-- ***************************call modal******************************** -->
          <?php include("modal/modalRegister.php");?>
    <!-- ********************************************************************** -->

        

</body>
</html>
