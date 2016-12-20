<?php 
       session_start();
?>
<!DOCTYPE html>


    <head>
        <?php include("head/head.php");
              include("checkuser.php");
              include ("modal/pass.php");

        ?>
        <title>SB Admin - Bootstrap Admin Template</title>
  
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
                            แก้ไขรหัสผ่าน</h1> </center>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="user.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> แก้ไขข้อมูลส่วนตัว
                            </li>
                        </ol>
<!-- ************start database******************************* -->
    <?php
    

   
    
    if(isset($_GET["id"])){
        
    
    include("connect.php");
    $sql = "SELECT * FROM stwUser 
                        WHERE stwUser_id = '".$_GET["id"]."' ";
    $query = mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

    


    }
     

    ?>
    
    
 
  

<!-- *******************start from*********************** -->
<form class="form-horizontal" id="save_pass" 
onsubmit="return save_pass();"> 
    <div class="form-group">                 
         <input name="PassUser_id" value="<?php echo $result['stwUser_id']; ?>" type="hidden">
    </div>


<!-- *****************************first from********************** -->
       

            
<!-- *********************************first from********************* -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อผู้ใช้งาน</label>  
                <div class="col-md-4">
                    <input name="stwFirstname" readonly="" class="form-control input-md" required="" value="<?php echo $result['stwUsername']; ?>">
    
                </div>
            </div>
<!-- *********************************last from************ -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">รหัสผ่านใหม่</label>  
                <div class="col-md-4">
                    <input  name="Password" type="password" placeholder="New-Password" class="form-control input-md" required="" id="Password">
    
                </div>
            </div>
<!-- ************************gender****************************** -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ยืนยันรหัสผ่านใหม่</label>  
                <div class="col-md-4">
                    <input   type="password" placeholder="Confirm-New-Password" class="form-control input-md" required="" id="rePassword">
                    <span id="verify" ></span>
    
    
                </div>
            </div>



              
            
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="btnSubmit" name="submit" class="btn btn-primary" >ตกลง</button>
                </div>
            </div>
</form>




















                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
