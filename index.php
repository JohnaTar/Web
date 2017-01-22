<!DOCTYPE html>
<html >
<head>
  
  <title>Welcome</title>
  <?php include ("head/indexhead.php");?>

</head>

<body>
  <div class="wrapper">
	<div class="container">
  <?php  

    include ("connect.php");
    $BB ="1";
    $sql ="SELECT
stwurllogo.stwUrlname,
stwshowlogo.stwShowlogo_id
FROM
stwshowlogo
INNER JOIN stwurllogo ON stwshowlogo.stwUrllogo_id = stwurllogo.stwUrllogo_id
 ";

    $result =mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo '<p><img class="img-circle" width="270" height="260" border="2" src="'.$row['stwUrlname'].'"></p>';


}

?>
		<div class="t25-b-white">
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
 <?php include("modal/modalRegister.php");?>
<?php include("modal/forget_email.php");?>
    


</body>
</html>

