<?php
include("connect.php");


 if (isset($_POST['add_dept'])){
        $sql = "SELECT * FROM stwDepartment
                WHERE stwDept_name='".$_POST['add_dept']."'";
        $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) == 0){
             echo true;
                exit();
          }else {   
             echo false;
                exit();
  
          }
    exit();
  }
  if (isset($_POST['Dept'])) {
    $sql = "INSERT INTO `stwDepartment` (`stwDept_name`) VALUES 
    ('".$_POST["Dept"]."')";
    $result = mysqli_query($conn,$sql);

    if($result) {

        echo "เพิ่มข้อมูลแผนกเรียบร้อย"; 
        exit();
    
    
    }else {
        echo "ไม่สามารถเพิ่มข้อมูลแผนกได้"; 
        exit();
    

    }
  
  }
  

if (isset($_POST['show_department'])) {
  $sql ="SELECT * FROM stwDepartment
         WHERE stwDept_id ='".$_POST['show_department']."'";
  $query =mysqli_query($conn,$sql);
  $result =mysqli_fetch_array($query,MYSQLI_ASSOC);
   echo ' <form class="form-horizontal" id="save_authen">
             <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อแผนก</label>  

                <div class="col-md-4">
                    <input  name="edit_dept_name"  type="text" placeholder="Department" class="form-control input-md" required="" value="'.$result['stwDept_name'].'">

                  </div>
            </div>
                  <input name="edit_dept_id" value="'.$result['stwDept_id'].'"  type="hidden">
                    </div>
            </div>
          
';


}
if (isset($_POST['edit_dept_id'])) {
$sql ="UPDATE stwDepartment SET

          stwDept_name = '".$_POST["edit_dept_name"]."'
          WHERE stwDept_id = '".$_POST['edit_dept_id']."' "; 
          $result = mysqli_query($conn,$sql);

    if($result) {

        echo "แก้ไขชื่อแผนกเรียบร้อย"; 
        exit();
    
    
    }else {
        echo "ไม่สามารถแก้ไขชื่อแผนกได้"; 
        exit();
    

    }
}





       





//email *********************************
    if (isset($_POST['UserName'])){
        $sql = "SELECT * FROM stwUser 
                WHERE stwUserName='".$_POST['UserName']."'";
        $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) == 0){
             echo true;
                exit();
          }else {   
             echo false;
                exit();
  
          }
    exit();
  }

//email *********************************

    if (isset($_POST['Email'])) {
      $sql = "SELECT * FROM stwUser 
              WHERE stwEmail='".$_POST['Email']."'";
     $result = mysqli_query($conn, $sql);
       if(mysqli_num_rows($result) == 0){
          echo true;
            exit();
          }else {   
            echo false;
              exit();
          }
  exit();
  }
//delete *********************************

  if(isset($_POST['delete'])){
    
    include("connect.php");
    $sql = "DELETE  FROM stwUser 
                        WHERE stwUser_id = '".$_POST['delete']."' ";
    $query = mysqli_query($conn,$sql);

    if ($query) {
        echo "ลบข้อมูลเรียบร้อย";
        exit();
     
    }else {
        echo "ไม่สามารถลบข้อมูลได้"; 
      exit();
    }
}
//edit *********************************

if (isset($_POST['stwUser_id'])) {

  if ($_POST['stwActivate']=='1') {
    $Request ='3';
  } else{
    $Request ='1';
  }

$sql ="UPDATE stwUser SET

          stwPrefix_id = '".$_POST["stwPrefix_id"]."',
          stwFirstname = '".$_POST["stwFirstname"]."',
          stwLastname = '".$_POST["stwLastname"]."',
          stwGender = '".$_POST["stwGender"]."',
          stwEmail = '".$_POST["stwEmail"]."',
          stwTel = '".$_POST["stwTel"]."',
          stwDept_id = '".$_POST["stwDept_id"]."',
          stwStatus_id ='".$_POST["stwStatus_id"]."',
          stwActivate = '".$_POST["stwActivate"]."',
          stwRequest ='".$Request."'
          WHERE stwUser_id = '".$_POST["stwUser_id"]."' "; 
    $result = mysqli_query($conn,$sql);

    if($result) {

        echo "แก้ไขข้อมูลเรียบร้อย"; 
        exit();
    
    
    }else {
        echo "ไม่สามารถแก้ไขข้อมูลได้"; 
        exit();
    

    }
}


//register user *********************************

  if(isset($_POST['stwUsername'])){
    

  $sql = "INSERT INTO `stwUser` (`stwUsername`, `stwPassword`, `stwFirstname`, `stwLastname`, `stwEmail`, `stwTel`, `stwGender`, `stwActivate`, `stwDept_id`,`stwStatus_id`,`stwPrefix_id`,`stwRequest`,`stwCreated_date`)
      VALUES ('".$_POST["stwUsername"]."','".md5($_POST["stwPassword"])."'
           ,'".$_POST["stwFirstname"]."','".$_POST["stwLastname"]."',
           '".$_POST["stwEmail"]."','".$_POST["stwTel"]."','".$_POST["stwGender"]."',
           '".$_POST["stwActivate"]."','".$_POST["stwDept_id"]."','".$_POST["stwStatus_id"]."','".$_POST["stwPrefix_id"]."','".$_POST["stwRequest"]."',NOW())";
  $query = mysqli_query($conn,$sql);
  
if($query) {

        echo "บันทึกข้อมูลเรียบร้อย"; 
        exit();
  }else {
        echo "บันทึกข้อมูลไม่เรียบร้อย"; 
        exit();
    

    }
   }


//edit authen *********************************

if(isset($_POST['authen'])){
  $sql = "SELECT * FROM stwUser
          WHERE stwUser_id = '".$_POST['authen']."'";
  $query =mysqli_query($conn,$sql);
  $result =mysqli_fetch_array($query,MYSQLI_ASSOC);

  echo ' <form class="form-horizontal" id="save_authen">
            <div class="form-group" >
                <label class="col-md-4 control-label" for="selectbasic">สถานะการอบรม</label>
                    <div class="col-md-4">
                    <select  name="stwActivate" class="form-control input-md">
                <option value="1">อนุมัติ </option>
                <option value="2">ไม่อนุมัติ</option>
                
                    </select>
                  <input name="authen_id" value="'.$result['stwUser_id'].'"  type="hidden">

                    </div>
            </div>
          
';


}


if (isset($_POST['authen_id'])) {
  if ($_POST['stwActivate']=='1') {
    $Request ='3';
  } else{
    $Request ='1';
  }
  $sql ="UPDATE stwUser SET

          stwActivate = '".$_POST['stwActivate']."',
          stwRequest = '".$Request."'
          WHERE stwUser_id = '".$_POST['authen_id']."' "; 
    $result = mysqli_query($conn,$sql);

    if($result) {

        echo "แก้ไขสิทธิ์เรียบร้อย"; 
        exit();
    
    
    }else {
        echo "ไม่สามารถแก้ไขสิทธิ์ได้"; 
        exit();
    

    }
}

if (isset($_POST['PassUser_id'])) {
    $sql ="UPDATE stwUser SET

          stwPassword = '".md5($_POST['Password'])."'
          WHERE stwUser_id = '".$_POST['PassUser_id']."' "; 
    $result = mysqli_query($conn,$sql);

    if($result) {

        echo "แก้ไขรหัสผ่านเรียบร้อย"; 
        exit();
    
    
    }else {
        echo "ไม่สามารถแก้ไขรหัสผ่านได้"; 
        exit();
    

    }
}

if (isset($_POST['request'])) {
  $request = '2';
  $sql ="UPDATE stwUser SET stwRequest ='".$request."'
        WHERE stwUser_id ='".$_POST['request']."'";
         $result = mysqli_query($conn,$sql);

    if($result) {

        echo "กำลังร้องขอสิทธิ์ในทำแบบทดสอบ โปรดรอการอนุมัติ "; 
        exit();
    
    
    }else {
        echo "ไม่สามารถดำเนินการได้"; 
        exit();
    

    }
 
}




if (isset($_POST['text'])){
        $sql = "SELECT * FROM stwSubject 
                WHERE stwSubject_text='".$_POST['text']."'";
        $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) == 0){
             echo true;
                exit();
          }else {   
             echo false;
                exit();
  
          }
    exit();
  }

 if (isset($_POST['add_quest'])) {

  $id = $_POST['add_quest'];

    echo '<form class="form-horizontal" id="">
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">คำถาม</label>  

                <div class="col-md-4">
                    <input  name="Dept"  type="text" placeholder="Department" class="form-control input-md" required=""  value=" '.$id.'">
                       
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">* ไฟล์ภาพประกอบ(ถ้ามี)</label>  

                <div class="col-md-4">
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                    <input type="file"  name="file">
                    <span class="label label-success">ขนาดไฟล์ไม่เกิน 1 MB</span>
               </div>
            </div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ตัวเลือกและคำตอบ</label>  

                <div class="col-md-4">
                    <input  name="choice[1]"  type="text" placeholder="Department" class="form-control input-md" required="" maxlength="250"> 
                    <input type="radio" name="answer" value="1">(คำตอบ)
                       
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ตัวเลือกและคำตอบ</label>  

                <div class="col-md-4">
                    <input  name="choice[2]"  type="text" placeholder="Department" class="form-control input-md" required="" maxlength="250"> 
                    <input type="radio" name="answer" value="2">(คำตอบ)
                       
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ตัวเลือกและคำตอบ</label>  

                <div class="col-md-4">
                    <input  name="choice[3]"  type="text" placeholder="Department" class="form-control input-md" required=""  maxlength="250"> 
                    <input type="radio" name="answer" value="3">(คำตอบ)
                       
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ตัวเลือกและคำตอบ</label>  

                <div class="col-md-4">
                    <input  name="choice[4]"  type="text" placeholder="Department" class="form-control input-md" required=""  maxlength="250"> 
                    <input type="radio" name="answer" value="4">(คำตอบ)
                       
                </div>
            </div>


            </div>';
  } 




  

?>