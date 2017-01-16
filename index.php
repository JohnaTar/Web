<!DOCTYPE html>
    <head>
      <title>Welcome </title>
          <?php include("head/indexhead.php"); ?>
    </head>
      <body class="bg-success">

        <div class="wrapper dark-bg"> 
            <div class="container">

            <div class="img">
                <img src="img/2.png" width="350" height="250"  >
            </div>
           
            <div class="t25-b-white">
                <h3 class="text-center">Safety Training Web Application for Factory Workers</h3>
                <h5 class="text-center">การพัฒนาเว็บแอพพลิเคชั่นการอบรมด้านความปลอดภัยให้กับพนักงานโรงงาน</h5>
            </div>
            <br />
           
            <form class="form" action="checklogin" method="POST">
                <input type="text" placeholder="Username"  required="" name="Username" />
                <input type="password" placeholder="Password" required="" name="Password" />
                <button type="submit" class="btn btn-warning">เข้าสู่ระบบ</button> 
                <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">สมัครสมาชิก</button>
                <br>
               <br>
                <a href=""  data-toggle="modal" data-target="#forget_email" ><span class="label label-danger">FORGET PASSWORD</span> </a>


            </form>
            
                
            

            
            

        </div>
    </div>
    <!-- ***************************call modal******************************** -->
          <?php include("modal/modalRegister.php");?>
          <?php include("modal/forget_email.php");?>
    <!-- ********************************************************************** -->

        

      </body>
</html>
