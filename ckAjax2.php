<?php
include("connect.php");

if (isset($_POST['stwUser_id'])) {



$sql ="UPDATE stwUser SET

          stwPrefix_id = '".$_POST["stwPrefix_id"]."',
          stwFirstname = '".$_POST["stwFirstname"]."',
          stwLastname = '".$_POST["stwLastname"]."',
          stwGender = '".$_POST["stwGender"]."',
          stwEmail = '".$_POST["stwEmail"]."',
          stwTel = '".$_POST["stwTel"]."',
          stwDept_id = '".$_POST["stwDept_id"]."',
          stwStatus_id ='".$_POST["stwStatus_id"]."',
          stwActivate = '".$_POST["stwActivate"]."'
          WHERE stwUser_id = '".$_POST["stwUser_id"]."' "; 
    $result = mysqli_query($conn,$sql);

    if($result) {

        echo "บันทึกข้อมูลเรียบร้อย"; 
        exit();
    
    
    }else {
        echo "บันทึกข้อมูลไม่เรียบร้อย"; 
        exit();
    

    }
}



?>