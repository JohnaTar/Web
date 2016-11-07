<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8"> 
  <link href="css/bootstrap.min.css" rel="stylesheet"> 
  <link href="css/plugins/morris.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
        <title>Welcome to MyWebbbbb</title> 

 <!-- ***************************JAVA******************************** -->
<script type="text/javascript">
            $(document).ready(function() {
                $("#btnSubmit").click(function() {
                    var check = check_email();
                    check.success(function(data) {
                        if (data != 1){
                            $("#register").submit();
                            return false;
                        }
                    });
                    
                });
                $("#Username").focusout(function() {
                    var check = check_email();
                    check.success(function(data) {
                        if (data == 1) {
                            $("#msg1").html('ชื่ออีเมล์นี้มีคนใช้แล้ว กรุณาเปลี่ยนชื่ออีเมล์ใหม่');
                        }
                    });
                });
            });
            function check_email() {
                return $.ajax({
                    type: 'POST',
                    data: {stwUsername: $('#Username').val()},
                    url: 'ckAjax.php'
                });
            }
        </script>
        <style>
            .message{
                font-size: 12px;
                color: red;
            }
        </style>

  
  </head>
  <body>
  <form class="form-horizontal" action="checklogin.php" method="POST" > 
    <div class="loginmodal-container">
        <div class="row">
            <h1>Please Login </h1><br>
              <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">Username</label>  
                        <div class="col-md-8">
                            <input  name="Username" type="text" placeholder="Username" class="form-control input-md" required="">
    
                        </div>
              </div> 

              <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">Password</label>  
                        <div class="col-md-8">
                            <input name="Password" type="password" placeholder="Password" class="form-control input-md" required="">
    
                        </div>
              </div> 


                <button type="submit" class="btn btn-primary btn-xl">เข้าสู่ระบบ</button> 
                <button type="button" class="btn btn-info btn-xl" data-toggle="modal" data-target="#myModal">สมัครสมาชิก</button>
                
                  
        </div>
    </div>
</form>
 <!-- ***************************call modal******************************** -->
          <?php include("modal/modalRegister.php");?>
<!-- ********************************************************************** -->















 

  </body>
</html>