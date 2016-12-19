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
                            แก้ไขข้อมูลส่วนตัว</h1> </center>
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

    $prefix =$result['stwPrefix_id'];


    }
     

    ?>
    
    
 
  

<!-- *******************start from*********************** -->
<form class="form-horizontal" id="edit_user_form" 
onsubmit="return edit_user_form1();"> 
    <div class="form-group">                 
         <input name="stwUser_id" value="<?php echo $result['stwUser_id']; ?>" type="hidden">
    </div>


<!-- *****************************first from********************** -->
          <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">คำนำหน้า</label>
                    <div class="col-md-4">
                    <select  name="stwPrefix_id" class="form-control input-md">
                    
                <option value="1" <?php if($result['stwPrefix_id'] == '1'){echo "selected='selected'";} ?> >นาย </option>
                <option value="2" <?php if($result['stwPrefix_id'] == '2'){echo "selected='selected'";} ?> >นาง</option>
                <option value="3" <?php if($result['stwPrefix_id'] == '3'){echo "selected='selected'";} ?>>นางสาว</option>
                </select>
                </div>
            </div>


            
<!-- *********************************first from********************* -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อ</label>  
                <div class="col-md-4">
                    <input name="stwFirstname" type="text" placeholder="Firstname" class="form-control input-md" required="" value="<?php echo $result['stwFirstname']; ?>">
    
                </div>
            </div>
<!-- *********************************last from************ -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">นามสกุล</label>  
                <div class="col-md-4">
                    <input  name="stwLastname" type="text" placeholder="Lastname" class="form-control input-md" required="" value="<?php echo $result["stwLastname"]; ?>">
    
                </div>
            </div>
<!-- ************************gender****************************** -->

<div class="form-group">
              <label class="col-md-4 control-label" for="fn">เพศ</label>  
              <div class="col-md-4">
              
  <label><input type="radio" name="stwGender" value="1" <?php if($result['stwGender'] == '1'){echo "checked='checked'";} ?>>ชาย</label>


  <label><input type="radio" name="stwGender" value="2" <?php if($result['stwGender'] == '2'){echo "checked='checked'";} ?>>หญิง</label>
</div>
</div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">อีเมลล์</label>  
                <div class="col-md-4">
                    <input  name="stwEmail" type="email" placeholder="Email" class="form-control input-md" required=""  value="<?php echo $result["stwEmail"]; ?>"
                    id="Email">
                     <span id="msg2"></span>
    
                </div>
            </div>
<!-- ********************tel********************************** -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">เบอร์โทร</label>  
                <div class="col-md-4">
                    <input name="stwTel" type="text" placeholder="Tel" class="form-control input-md" required="" value="<?php echo $result['stwTel']; ?>" pattern="([0-9])+(?:-?\d){9,}" title="กรุณากรอกตัวเลข 10 ตัว">
    
                </div>
            </div>
<!-- **********************************dept*********************** -->
            <input type="hidden" name="stwStatus_id" value="<?php echo $result["stwStatus_id"]; ?>">
            <input type="hidden" name="stwActivate" value="<?php echo $result["stwActivate"]; ?>">
<!-- **********************************dept*********************** -->


            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">แผนก</label>
                    <div class="col-md-4">
                    <select  name="stwDept_id" class="form-control input-md">
                <option value="1" <?php if($result['stwDept_id'] == '1'){echo "selected='selected'";} ?>>แผนก 1  </option>
                <option value="2" <?php if($result['stwDept_id'] == '2'){echo "selected='selected'";} ?>>แผนก 2</option>
                <option value="3" <?php if($result['stwDept_id'] == '3'){echo "selected='selected'";} ?>>แผนก 3</option>

              
                    </select>
                </div>
            </div>

<!-- ***************dept************************************* -->
          
            


              
            
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
