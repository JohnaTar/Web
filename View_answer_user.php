<?php
session_start();
$user_id =$_GET['id'];


if ($_SESSION['ses_id']=='') {
     echo "<script>alert('PLEASE LOGIN')</script>";
     echo "<script>window.location='index'</script>";
 
  } else if ($_SESSION['status']== 3 ) {
    echo "<script>alert('NO PERMISSION')</script>";
    echo "<script>window.location='index'</script>";

  
} else{
}
?>
<!DOCTYPE html>



    <head>
        <?php 
        include("head/head.php");

        
        ?>
        
  
    </head>

        <body>
        
            
            <div id="wrapper">


<!-- *************************MENU BAR************************** -->
                <?php include("menu/menubar.php"); ?>
<!-- *********************************************************** -->
        <div id="page-wrapper">
            <div class="container-fluid">            
                <div class="row">
                    <div class="col-md-12">                    
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> คำตอบสมาชิก
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- *********************************start table************************************* -->
<?php 
include ("connect.php");
  $sql = "SELECT stwUser.stwUser_id,stwUser.stwFirstname,stwUser.stwLastname,stwPrefix.stwPrefix_name,
            stwDepartment.stwDept_name 
                FROM stwUser  
                INNER JOIN stwDepartment
                ON stwUser.stwDept_id = stwDepartment.stwDept_id
                INNER JOIN stwPrefix
                ON stwUser.stwPrefix_id = stwPrefix.stwPrefix_id
                WHERE stwUser.stwUser_id=$user_id";
                 $result = mysqli_query($conn, $sql);
                   
                 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);


?>

                <div class="row">
                    <div class="col-md-12 ">
                    <div class="alert alert-success">
                    <strong>คำตอบ : </strong> <?php echo $row['stwPrefix_name']." ".
                    $row['stwFirstname']." ".
                    $row['stwLastname']; ?> <strong>แผนก :</strong> <?php echo $row['stwDept_name']; ?>
                </div>
                            <div class="table-responsive">

                       <?php mysqli_close($conn); ?>
                        
                           
                         <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                          
                                        <th>ข้อ</th>
                                        <th>คำถาม</th>
                                        <th>คำตอบ</th>
                                        <th>เฉลย</th> 
                                  
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>   

                                <tr>
   
    <?php
     

        include("connect.php");
        $sql="SELECT
stwQuestion.stwQuestion_text,
stwtesting.stwExam_id,
stwChoice.stwAnswer,
stwChoice.stwChoice_text,
stwtesting.stwUser_id
FROM
stwtesting
INNER JOIN stwQuestion ON stwtesting.stwQuestion_id = stwQuestion.stwQuestion_id
INNER JOIN stwChoice ON stwtesting.stwChoice_id = stwChoice.stwChoice_id
WHERE stwUser_id =$user_id AND stwExam_id ='".$_SESSION['answer']."'";
  $res = mysqli_query($conn, $sql);
                 $i =1;  
           while ($ro=mysqli_fetch_array($res,MYSQLI_ASSOC)) {
     
                

         ?> 

                                   
                <td><?php echo $i; ?></td>
                <td><?php echo $ro['stwQuestion_text']; ?></td>
                <td><?php echo $ro['stwChoice_text']; ?></td>
                <td>
                	<?php  if ($ro['stwAnswer']=='yes') {
                		echo '<i class="fa fa-check fa-2x" style="color:green"></i>';
                	}else{
                			echo '<i class="fa fa-times fa-2x" style="color:red"></i>';
                	}

                	?>
                </td>                
            
               




                               
                                 </tr>                       
                             <?php $i++; } 
                                mysqli_close($conn);
                                ?>
                                </tbody>
                            </table>
                            
                            </div>

                        </div>
                        <!-- Grid -->
                    </div>
                    <!-- Row -->
                 </div>
    </div>
</div>
 <!-- *******************end table************************ -->

  


 
 
  






    </body>

</html>
