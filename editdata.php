/<?php
session_start();

if ($_SESSION['ses_id']=='') {
     echo "<script>alert('PLEASE LOGIN')</script>";
     echo "<script>window.location='index'</script>";
 
  } else if ($_SESSION['status']== 3 ) {
    echo "<script>alert('NO PERMISSION')</script>";
    echo "<script>window.location='index</script>";

  
} else{
}
?>OCTYPE html>


    <head>
        <?php include("head/head.php");
            
        ?>
     
  
    </head>

        <body>
            
            
            <div id="wrapper">

<!-- *************************MENU BAR************************** -->
                <?php include("menu/menubar.php"); ?>

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
<!-- ************start database******************************* -->
    <?php
    
//
   
    
    if(isset($_GET["id"])){
        
    
    include("connect.php");
    $sql = "SELECT * FROM stwUser 
                        WHERE stwUser_id = '".$_GET["id"]."' ";
    $query = mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

    $prefix =$result['stwPrefix_id'];


    }
     
    $Dep = $result['stwDept_id'];


    ?>
    
    
 
  

<!-- *******************start from*********************** -->
<form class="form-horizontal" id="edit_user_form" 
onsubmit="return edit_user_form();"> 
    <div class="form-group">                 
         <input name="stwUser_id" value="<?php echo $result['stwUser_id']; ?>" type="hidden">
    </div>


<!-- *****************************first from********************** -->
          <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">คำนำหน้า</label>
                    <div class="col-md-4">
                    <select  name="stwPrefix_id" class="form-control input-md" id="prefix">
                    
                <option value="1" <?php if($result['stwPrefix_id'] == '1'){echo "selected='selected'";} ?> >นาย </option>
                <option value="2"  <?php if($result['stwPrefix_id'] == '2'){echo "selected='selected'";} ?> >นาง</option>
                <option value="3"  <?php if($result['stwPrefix_id'] == '3'){echo "selected='selected'";} ?>>นางสาว</option>
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
              
  <label><input type="radio" required=""  id="radio_1" name="stwGender" value="1" <?php if($result['stwGender'] == '1'){echo "checked='checked'";} ?>>ชาย</label>


  <label><input type="radio"  required ="" id="radio_2" name="stwGender" value="2" <?php if($result['stwGender'] == '2'){echo "checked='checked'";} ?>>หญิง</label>
</div>
</div>
<!-- **********************************email******************** -->
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
           <div class="form-group">
              <label class="col-md-4 control-label" for="fn">ประเภทผู้ใช้</label>  
              <div class="col-md-4">
              
  <label><input type="radio" required="" name="stwStatus_id" value="2" <?php if($result['stwStatus_id'] == '2'){echo "checked='checked'";} ?>>Super User</label>


  <label><input type="radio" required="" name="stwStatus_id" value="3"<?php if($result['stwStatus_id'] == '3'){echo "checked='checked'";} ?>>User</label>
</div>
</div>
          
           
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">แผนก</label>
                    <div class="col-md-4">
                    <select  name="stwDept_id" class="form-control input-md" required="">
                    
                      <?php   
            
           
            $sql = "SELECT * FROM `stwDepartment` ";
            $result = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
          if ($Dep ==$row['stwDept_id']) {
              $sel= "selected";
          }else {
              $sel = "";
          }
        
        
          ?>
        <option value="<?php echo $row['stwDept_id'];?>" <?php echo $sel; ?>><?php echo $row['stwDept_name']; ?> </option>
        <?php }?>
          
           
    
                    </select>

                    
                  
                    
                </div>
            </div>
             
                  





              
            
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="btnSubmit" name="submit" class="btn btn-primary" ><i class="fa fa-floppy-o fa-2x" aria-hidden="true"></i></button>
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
