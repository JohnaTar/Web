
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
      <title>Test</title> 
  </head>
<body> 
  
    
<form class="form-horizontal" action="checklogin.php" method="POST"> 
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
  
<!-- *********************************start dialog************************************* -->
    
<form class="form-horizontal" action="save.php" method="POST"> 

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h1 class="modal-title">สมัครสมาชิก</h1>
        </div>
        
         
        
<!-- *********************************username from********************************************* -->
        <div class="modal-body">
          

            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อเข้าใช้งาน</label>  

                <div class="col-md-4">
                    <input  name="stwUsername" type="text" placeholder="Username" class="form-control input-md" required="" pattern=".{8,}" title="มากกว่าแปดตัวนะไอ้สัส"> 
                    
    
                </div>
            </div>

            
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="submit" name="submit" class="btn btn-primary">ตกลง</button>
                </div>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</form>







    

</body>
</html>
