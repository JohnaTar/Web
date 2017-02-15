CTYPE html>
<html>
<head>
  
  <title>Welcome</title>
  <?php include ("head/indexhead.php");?>

</head>

<body>
  <div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
 
    <div class="t25-b-white">
    <?php  include ("connect.php");
  
$sql ="SELECT
stwShowlogo.stwShowlogo_id,
stwUrllogo.stwUrlname,
stwShowlogo.stwUrllogo_id
FROM
stwShowlogo
INNER JOIN stwUrllogo ON stwShowlogo.stwUrllogo_id = stwUrllogo.stwUrllogo_id
";
    $result =mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  if ($row['stwUrlname']=='Images/logo.gif') {
    echo '<center><p><img  class="img-responsive" width="180" height="140" border="2" src="'.$row['stwUrlname'].'"></p></center>';
  } else{
    echo '<p><img class="img-circle" class="img-responsive" width="270" height="260" border="2" src="'.$row['stwUrlname'].'"></p>';

  }

 




?>
                <h3 class="text-center">Safety Training Web Application for Factory Workers</h3>
                <h4 class="text-center">การพัฒนาเว็บแอพพลิเคชั่นการอบรมด้านความปลอดภัยให้กับพนักงานโรงงาน</h4>
            </div>
            <div class="dd">
    <form class="form-" action="checklogin" method="POST">
        <input type="text" placeholder="Username"  required="" name="Username" />
                <input type="password" placeholder="Password" required="" name="Password" />
                <button type="submit" class="btn btn-warning">เข้าสู่ระบบ</button> 
                <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">สมัครสมาชิก</button>
    </form>
           </div>
            <a href=""  data-toggle="modal" data-target="#forget_email" ><span class="label label-danger">FORGET PASSWORD</span> </a>


  </div>
  </div>
  </div>
</div>

 <?php include("modal/modalRegister.php");?>
<?php include("modal/forget_email.php");?>
    


</body>
</html>



