<!DOCTYPE html>
    <head>
      <title>Welcome </title>
          <?php include("head/indexhead.php"); ?>
    </head>
      <body>

        <div class="wrapper dark-bg"> 
            <div class="container">

            <div class="img">
                <img src="img/2.png" width="400" height="300"  >
            </div>
           
            <div class="t25-b-white">
                <h3 class="text-center">Safety Training Web Application for Factory Workers</h3>
                <h5 class="text-center">การพัฒนาเว็บแอพพลิเคชั่นการอบรมด้านความปลอดภัยให้กับพนักงานโรงงาน</h5>
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
