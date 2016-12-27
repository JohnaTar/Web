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
 








  

?>