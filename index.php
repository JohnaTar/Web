<!DOCTYPE html>
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
                <br>
                <button type="submit" class="btn btn-success "><i class="fa fa-sign-in " aria-hidden="true"> : Login</i></button> 
                 
              

  
    </form>
    
    <a href=""  data-toggle="modal" data-target="#forget_email" ><i class="fa fa-cog " aria-hidden="true"></i>  FORGET PASSWORD</span> </a>  
      


    
           </div>
           


  </div>
  </div>
  </div>
</div>


<?php include("modal/forget_email.php");?>
    


</body>
</html>



