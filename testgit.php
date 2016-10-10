
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8"> 
  <link href="css/bootstrap.min.css" rel="stylesheet"> 
  <link href="css/plugins/morris.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
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
                <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button> 
                
                  </div>
            </div>
          </div>
      </form>
  
    

  </body>
</html>