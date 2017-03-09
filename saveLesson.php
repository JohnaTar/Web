<?php
include('connect.php');
if (isset($_POST['conntent'])) {
  $data = $_POST['conntent'];
  $less_id = $_POST['lesson'];

  $sql = "INSERT INTO `stwContent` (`stwContent_id`, `stwLesson_id`, `stwContent_detail`) VALUES ('', '$less_id', '$data')";
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