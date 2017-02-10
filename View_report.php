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
<!-- *********************************start table************************************* -->                                               
                <div class="row">
                    <div class="col-md-12">
                        <center><h2>ตารางรายงานการทำแบบทดสอบ</h2></center>
                            <div class="table-responsive">       
                           
                         <table class="table table-striped table-hover" id="myTable">
                                <thead>
                                        <th>ลำดับ</th>
                                        <th>ชื่อแบบทดสอบ</th>
                                        <th>วันที่ทดสอบ</th>
                                        <th>เวลาเริ่ม</th>
                                        <th>เวลาสิ้นสุด</th> 
                                        <th>จำนวนคนทดสอบ</th>
                                        <th>จำนวนคนผ่าน</th>
                                        <th>เมนู</th>

                                        
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>   

                                <tr>

<?php
    
include("connect.php");
    $sql = "SELECT *, 
                DATE_FORMAT(stwDate_test, '%d-%m-%Y') AS stwDate_test, 
                TIME_FORMAT(stwTime_start, '%H:%i') AS stwTime_start,  
                TIME_FORMAT(stwTime_end, '%H:%i') AS stwTime_end   
            FROM stwSubject ORDER BY  stwSubject_id DESC";

    $result = mysqli_query($conn,$sql);
     $i =1;

     while($data = mysqli_fetch_array($result)) {
    $subject_id = $data['stwSubject_id'];

   
    $sql = "SELECT COUNT(*) FROM stwQuestion WHERE stwSubject_id = $subject_id";  //นับจำนวนคำถามของหัวข้อนี้
    $r = mysqli_query($conn, $sql);
    $num_q = 0;
    if($r) {
        $row = mysqli_fetch_array($r);
        $num_q = $row[0];
    } 
  //////////////////////////////////////////////////////////////////////

  $s =$num_q *50/100;
  $sql ="SELECT COUNT(*) FROM stwscore WHERE stwSubject_id=$subject_id AND amount >=$s";
  $r = mysqli_query($conn, $sql);
    $num_p = 0;
    if($r) {
        $row = mysqli_fetch_array($r);
        $num_p = $row[0];
    } 
  /////////////////////////////////////////////////////////////////

  $sql ="SELECT COUNT(*) FROM stwscore WHERE stwSubject_id=$subject_id ";
  $r = mysqli_query($conn, $sql);
    $num_h = 0;
    if($r) {
        $row = mysqli_fetch_array($r);
        $num_h = $row[0];
    } 
    
?>
        



                <td><?php echo $i ?></td>       
                <td><?php echo $data['stwSubject_text']; ?></td>
                <td><?php echo $data['stwDate_test']; ?></td>
                <td><?php echo $data['stwTime_start']; ?></td>
                <td><?php echo $data['stwTime_end']; ?></td>
                <td><?php  echo $num_h; ?></td>
                <td><?php  echo $num_p; ?></td>   
               <td><a href="View_report_detail?id=<?php echo  $data['stwSubject_id'];?>" class="btn btn-success">Detail</td>             
                        
           
               




                               
                                 </tr>                       
                                <?php } $i++;
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

  


 
 
  






    </body>

</html>