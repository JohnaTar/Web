<?php
include('connect.php');
if (isset($_POST['conntent'])) {
  $data = $_POST['conntent'];
  $less_id = $_POST['lesson'];

  $sql = "UPDATE `stwContent` SET `stwContent_detail`='$data' WHERE (`stwLesson_id`='$less_id') ";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย')</script>";
          echo "<script> window.history.go(-2);</script>";
  }else{
   echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้')</script>";
         echo "<script> window.history.go(-2);</script>";
  }





}






  

?>