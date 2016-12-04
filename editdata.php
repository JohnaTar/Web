<!DOCTYPE html>


    <head>
        <?php include("head/head.php");?>
        <title>SB Admin - Bootstrap Admin Template</title>
  
    </head>

        <body>
            
            
            <div id="wrapper">

<!-- *************************MENU BAR************************** -->
                <?php include("menu/menubar.php"); ?>
<!-- *********************************************************** -->
<!-- *********************************end left bar************* -->

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-12">
                       <center> <h1 class="page-header">
                            แก้ไขข้อมูลสมาชิก</h1> </center>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> แก้ไขข้อมูลสมาชิก
                            </li>
                        </ol>
<!-- *********************************start database******************************* -->
    <?php
    

   
    
    if(isset($_GET["id"]))
    {
        
    }
    include("connect.php");
    $sql = "SELECT * FROM stwUser 
                        WHERE stwUser_id = '".$_GET["id"]."' ";
    $query = mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

    $prefix =$result['stwPrefix_id'];
    
    

 
    ?>
    

    
  

<!-- *********************************start from********************************************* -->
<form class="form-horizontal" id="edit_user_form" 
onsubmit="return edit_user_form();"> 
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
           
                <label class="col-md-4 control-label" for="selectbasic">เพศ</label>
                    <div class="col-md-4">
             
               
                 <select  name="stwGender" class="form-control input-md">
                <option value="1" <?php if($result['stwGender'] == '1'){echo "selected='selected'";} ?> >ชาย </option>
                <option value="2" <?php if($result['stwGender'] == '2'){echo "selected='selected'";} ?>>หญิง</option>
                </select>
                </div>
            </div>
<!-- **********************************email******************** -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">อีเมลล์</label>  
                <div class="col-md-4">
                    <input  name="stwEmail" type="email" placeholder="Email" class="form-control input-md" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $result["stwEmail"]; ?>"
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
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">แผนก</label>
                    <div class="col-md-4">
                    <select  name="stwDept_id" class="form-control input-md">
                <option value="1" <?php if($result['stwDept_id'] == '1'){echo "selected='selected'";} ?>>แผนก 1  </option>
                <option value="2" <?php if($result['stwDept_id'] == '2'){echo "selected='selected'";} ?>>แผนก 2</option>
                <option value="2" <?php if($result['stwDept_id'] == '3'){echo "selected='selected'";} ?>>แผนก 3</option>

              
                    </select>
                </div>
            </div>

<!-- ***************dept************************************* -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">สถานะ</label>
                    <div class="col-md-4">
                    <select  name="stwStatus_id" class="form-control input-md">
                
                <option value="2" <?php if($result['stwStatus_id'] == '2'){echo "selected='selected'";} ?>>Super User</option>
                <option value="3" <?php if($result['stwStatus_id'] == '3'){echo "selected='selected'";} ?>>User</option>
                    </select>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">สถานะการอบรม</label>
                    <div class="col-md-4">
                    <select  name="stwActivate" class="form-control input-md">
                <option value="1"<?php if($result['stwActivate'] == '1'){echo "selected='selected'";} ?>>อนุมัติ </option>
                <option value="2"<?php if($result['stwActivate'] == '2'){echo "selected='selected'";} ?>>ไม่อนุมัติ</option>
                
                    </select>
                    </div>
            </div>


              
            
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="btnSubmit" name="submit" class="btn btn-primary" >ตกลง</button>
                </div>
            </div>





























                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
