<?php
session_start();

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
                                <i class="fa fa-table"></i> ตารางรายงานการทำแบบทดสอบ
                            </li>
                        </ol>
                    </div>
                </div> 
                 

<!-- ****************************start table******************** -->
<?php 
    include("connect.php");

    $sub = $_GET['id'];
    $ss="SELECT * FROM stwExam WHERE stwExam_id ='$sub'";
$res = mysqli_query($conn,$ss);
$rr=mysqli_fetch_array($res,MYSQLI_ASSOC);
$pass =$rr['stwExam_past'];
   


    
   


    

?>    
                      
                <div class="row">
                    <div class="col-md-12">
                    <center><h2>ตารางรายงานการทำแบบทดสอบ : <?php echo $rr['stwExam_name']; ?></h2></center>
                              <table class="table table-striped table-hover" id="myTable">
                                <thead>
                                        <th>ลำดับ</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>แผนก</th>
                                        <th>คะแนนที่ได้</th>
                                        <th>สถานะการทดสอบ</th> 
                                       

                                        
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>   
                                <tr>
<?php


 
 
    $sqli = "SELECT COUNT(*) FROM stwExam_detail WHERE stwExam_id = $sub";  //
    $r = mysqli_query($conn, $sqli);
    $num_q = 0;
    if($r) {
        $row = mysqli_fetch_array($r);
        $num_q = $row[0];
    }

    
    ?>
       



    <?php

 $sql ="  SELECT stwExam_User.stwScore,stwExam_User.stwScore_date,
                 stwUser.stwFirstname,stwUser.stwLastname,
                 stwPrefix.stwPrefix_name,stwDepartment.stwDept_name,
                 stwExam_User.stwExam_id
          FROM stwExam_User
          INNER JOIN stwUser ON stwExam_User.stwUser_id = stwUser.stwUser_id
          INNER JOIN stwPrefix ON stwUser.stwPrefix_id = stwPrefix.stwPrefix_id
          INNER JOIN stwDepartment ON stwUser.stwDept_id = stwDepartment.stwDept_id
          WHERE stwExam_User.stwExam_id = '$sub'";
$result = mysqli_query($conn,$sql);
    $i=1;
   while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $rows['stwPrefix_name']." ".
                                               $rows['stwFirstname']." ".
                                               $rows['stwLastname']; ?>
                                <td><?php echo $rows['stwDept_name']; ?></td>
                                <td><?php  if ($rows['stwScore']==null) {
                                 
                                } else{
                                echo $rows['stwScore'];  
                                }

                                ?> / <?php echo $num_q; ?></td>
                                <td> <?php   $SC=$num_q *$pass/100;
                                 if ($rows['stwScore']==null) {
                                  echo '<i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>
                                               <span class="sr-only">Loading...</span>';
                                } 
                                elseif ($rows['stwScore']<=$SC) {
                                   echo '<i class="fa fa-times fa-2x"></i>';
                               
                                }else{
                                   echo '<i class="fa fa-check fa-2x"></i>';

                                }


                                       
                                      
                                             
                                           
                                        

                                     ?>
                                    

                                </td>

        

                                </tr>
                                 <?php  $i++;} 
                                mysqli_close($conn);
                                ?>

                                </tr>
                                 </tbody>
                            </table>
                            

                        </div>
                        <!-- Grid -->
                    </div>
                    <!-- Row -->
                 </div>
    </div>
</div>

  


 
 
  





    </body>

</html>
