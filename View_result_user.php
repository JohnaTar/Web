<?php
session_start();

if ($_SESSION['ses_id']=='') {
     echo "<script>alert('PLEASE LOGIN')</script>";
     echo "<script>window.location='index'</script>";
 
  }else{
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
                   <?php if ($_SESSION['status']==3) {
                    
                    include ("menu/menuUser.php");
                }else {

                include("menu/menubar.php");
            }

                 ?>
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
                                <i class="fa fa-table"></i> คะแนน
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- *********************************start table************************************* -->
<?php





$Sub_ID =$_GET['subject_id'];
$User_ID =$_SESSION['ID'];
$sql = "SELECT * FROM stwscore
        WHERE stwUser_id = '$User_ID'
         AND stwSubject_id = '$Sub_ID' ";
$result = mysqli_query($conn, $sql);    
    $num = mysqli_num_rows($result);
    if($num <= 0){
    echo'<div class="alert alert-danger alert-dismissable">ไม่พบข้อมูลการทำแบบทดสอบของท่าน</div>';

    } else{
 ?>                                               
                <div class="row">
                    <div class="col-md-12">
                        <center><h2>คะแนนที่ได้</h2></center>
                            <div class="table-responsive">       
                           
                         <table class="table table-striped table-hover" >
                                <thead>
                                        <th>ลำดับ</th>
                                        <th>ชื่อแบบทดสอบ</th>
                                        <th>เกณฑ์การผ่านแบบทดสอบ</th>
                                        <th>คะแนนที่ได้</th>
                                        <th>สถานะการทดสอบ</th>
                                       
                                        
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>   

                                <tr>

<?php





    
  $sqli = "SELECT COUNT(*) FROM stwQuestion WHERE stwSubject_id = '$Sub_ID'";  //นับจำนวนคำถามของหัวข้อนี้
    $r = mysqli_query($conn, $sqli);
    $num_q = 0;
    if($r) {
        $row = mysqli_fetch_array($r);
        $num_q = $row[0];
    } 
    
include("connect.php");

    $sql ="SELECT
stwscore.stwUser_id,
stwscore.stwSubject_id,
stwscore.amount,
stwUser.stwFirstname,
stwUser.stwLastname,
stwSubject.stwSubject_text,
stwPrefix.stwPrefix_name,
stwSubject.stwSubject_past
FROM
stwscore
INNER JOIN stwUser ON stwscore.stwUser_id = stwUser.stwUser_id
INNER JOIN stwSubject ON stwscore.stwSubject_id = stwSubject.stwSubject_id
INNER JOIN stwPrefix ON stwUser.stwPrefix_id = stwPrefix.stwPrefix_id
WHERE stwscore.stwSubject_id =  '$Sub_ID'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$pass=$row['stwSubject_past'];
?>
                <td><?php echo $row['stwPrefix_name']." ".
                                               $row['stwFirstname']." ".
                                               $row['stwLastname']; ?>
                                <td><?php echo $row['stwSubject_text']; ?></td>
                                <td><?php echo $row['stwSubject_past']; ?></td>
                                <td><?php echo $row['amount'];  ?> / <?php echo $num_q;  ?></td>
                                <td>  
                                        <?php $SC=$num_q *$pass/100;
                                        if ($row['amount']<=$SC) {
                                               echo '<i class="fa fa-times fa-2x"></i>';
                                        }else{
                                            echo '<i class="fa fa-check fa-2x"></i>';
                                        }

                                     ?>



                                </td>
                                 </tr>                       
                                <?php 
                                     }mysqli_close($conn);
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

  


 
 
  






    </body>

</html>