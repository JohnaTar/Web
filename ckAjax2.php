<?php
include("connect.php");

if (isset($_POST['UserName']))
  {
  
  $sql = "SELECT * FROM stwUser WHERE stwUserName='".$_POST['UserName']."'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) == 0)
    {
      
      echo 1;
      exit();
    
    }
      
  else
    {   
      echo 2;
      exit();
  
    }
  exit();
  }


//email *********************************

if (isset($_POST['Email'])) 
{
  

  $sql = "SELECT * FROM stwUser WHERE stwEmail='".$_POST['Email']."'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) == 0){
      
      echo true;
      exit();
    
    }
      
  else
    {   
      echo false;
      exit();

    }
  exit();
  }





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




  if(isset($_POST['stwUsername'])){
    

  $sql = "INSERT INTO `stwUser` (`stwUsername`, `stwPassword`, `stwFirstname`, `stwLastname`, `stwEmail`, `stwTel`, `stwGender`, `stwActivate`, `stwDept_id`,`stwStatus_id`,`stwPrefix_id`,`stwCreated_date`)
      VALUES ('".$_POST["stwUsername"]."','".md5($_POST["stwPassword"])."'
           ,'".$_POST["stwFirstname"]."','".$_POST["stwLastname"]."',
           '".$_POST["stwEmail"]."','".$_POST["stwTel"]."','".$_POST["stwGender"]."',
           '".$_POST["stwActivate"]."','".$_POST["stwDept_id"]."','".$_POST["stwStatus_id"]."','".$_POST["stwPrefix_id"]."',NOW())";
  $query = mysqli_query($conn,$sql);
  
if($query) {

        echo "บันทึกข้อมูลเรียบร้อยนาาจา"; 
        exit();
  }else {
        echo "บันทึกข้อมูลไม่เรียบร้อยนาจา"; 
        exit();
    

    }
   }



  

?>