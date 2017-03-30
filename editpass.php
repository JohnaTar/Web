<?php 
       session_start();
?>
<!DOCTYPE html>


    <head>
        <?php include("head/head.php");
              include("checkuser.php");
             
        ?>
     
       
  
    </head>

        <body>
            
            
            <div id="wrapper">

<!-- *************************MENU BAR************************** -->
                <?php include("menu/menuUser.php"); ?>

<!-- *********************************end left bar************* -->

        <div id="page-wrapper">

            <div class="container-fluid">
            
               
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-12">
                       <center> <h1 class="page-header">
                            เปลี่ยนรหัสผ่าน</h1> </center>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="user.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> เปลี่ยนรหัสผ่าน
                            </li>
                        </ol>
                        
<!-- ************start database******************************* -->
    <?php
    
            include("connect.php");

            
   

            if(isset($_POST['button'])){
                $id        = $_SESSION['ID'];
                $password   = md5($_POST['password']);
                $password1  = $_POST['password1'];
                $password2  = $_POST['password2'];

                $sql="SELECT * FROM stwUser WHERE stwUser_id='$id' 
                                                AND stwPassword='$password'";
                                               

                $result = mysqli_query($conn,$sql);
                

                if(mysqli_num_rows($result) == 0){
                    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password เดิมไม่ถูกต้อง</div>';
                }else{
                    if($password1 == $password2){
                        if(strlen($password1) >= 6){
                            $pass = md5($password1);
                            $update = mysqli_query($conn,"UPDATE stwUser SET stwPassword='$pass' WHERE stwUser_id='$id'");
                            if($update){
                                echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>เปลี่ยนรหัสผ่านเรียบร้อย.</div>';
                            }else{
                                echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>"ไม่สามารถเปลี่ยนรหัสผ่านได้</div>';
                            }
                        }else{
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>กรุณากรอกรหัสผ่านอย่างน้อย 6 ตัว</div>';
                        }
                    }else{
                        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>รหัสผ่านใหม่ไม่ตรงกัน</div>';
                    }
                }
            }
            
            ?>

            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <label class="col-md-4 control-label">รหัสผ่านเดิม</label>
                    <div class="col-md-4">
                        <input type="password" name="password" class="form-control" placeholder="Old-Password " required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">รหัสผ่านใหม่</label>
                    <div class="col-md-4">
                        <input type="password" name="password1" class="form-control" placeholder="New-Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">ยืนยันรหัสผ่านใหม่</label>
                    <div class="col-md-4">
                        <input type="password" name="password2" class="form-control" placeholder="Confirm-New-Password" required>
                    </div>
                </div>
               

            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="btnSubmit" name="button" class="btn btn-primary" ><i class="fa fa-floppy-o fa-2x" aria-hidden="true"></i></button>
                </div>
            </div>
                
            </form>
    
    








                    </div>
                </div>
                <!-- /.row -->
               </div> 

            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
