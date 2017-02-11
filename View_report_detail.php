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
                 <div class="row">
                    <div class="col-md-4"> </div>
                     <div class="col-md-4">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i>  Chart </h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>

                               
                            </div>
                        </div>
                    </div>
                   
                </div>

<!-- ****************************start table******************** -->
<?php 
    include("connect.php");

    $sub = $_GET['id'];
    $ss="SELECT * FROM stwsubject WHERE stwSubject_id ='$sub'";
$res = mysqli_query($conn,$ss);
$rr=mysqli_fetch_array($res,MYSQLI_ASSOC);
$pass =$rr['stwSubject_past'];
   


    
   


    

?>    
                      
                <div class="row">
                    <div class="col-md-12">
                    <center><h2>ตารางรายงานการทำแบบทดสอบ : <?php echo $rr['stwSubject_text']; ?></h2></center>
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
 $sql ="SELECT COUNT(*) FROM stwscore WHERE stwSubject_id=$sub ";
  $r = mysqli_query($conn, $sql);
    $num_h = 0;
    if($r) {
        $row = mysqli_fetch_array($r);
        $num_h = $row[0];
    } 

 
 
    $sqli = "SELECT COUNT(*) FROM stwQuestion WHERE stwSubject_id = '$sub'";  //นับจำนวนคำถามของหัวข้อนี้
    $r = mysqli_query($conn, $sqli);
    $num_q = 0;
    if($r) {
        $row = mysqli_fetch_array($r);
        $num_q = $row[0];
    } 

     $s =$num_q *$pass/100;
  $sql ="SELECT COUNT(*) FROM stwscore WHERE stwSubject_id=$sub AND amount >=$s";
  $r = mysqli_query($conn, $sql);
    $num_p = 0;
    if($r) {
        $row = mysqli_fetch_array($r);
        $num_p = $row[0];
    } 

    ?>
    <script type="text/javascript">
    $(function() {

    
  
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "ผ่านการทำแบบทดสอบ",
            value: <?php echo $num_p; ?>

        }, {
            label: "ไม่ผ่านการทำแบบทดสอบ",
            value: <?php echo $num_h-$num_p; ?>
    
        }],
        resize: true
    });

  

});
</script>                     



    <?php

 $sql ="
SELECT
stwscore.stwUser_id,
stwscore.stwSubject_id,
stwscore.amount,
stwuser.stwFirstname,
stwuser.stwLastname,
stwdepartment.stwDept_name,
stwsubject.stwSubject_text,
stwprefix.stwPrefix_name
FROM
stwscore
INNER JOIN stwuser ON stwscore.stwUser_id = stwuser.stwUser_id
INNER JOIN stwdepartment ON stwuser.stwDept_id = stwdepartment.stwDept_id
INNER JOIN stwsubject ON stwscore.stwSubject_id = stwsubject.stwSubject_id
INNER JOIN stwprefix ON stwuser.stwPrefix_id = stwprefix.stwPrefix_id
WHERE stwscore.stwSubject_id = '$sub'";
$result = mysqli_query($conn,$sql);
    $i=1;
   while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $rows['stwPrefix_name']." ".
                                               $rows['stwFirstname']." ".
                                               $rows['stwLastname']; ?>
                                <td><?php echo $rows['stwDept_name']; ?></td>
                                <td><?php echo $rows['amount'];  ?> / <?php echo $num_q; ?></td>
                                <td> <?php $SC=$num_q *$pass/100;
                                        if ($rows['amount']<=$SC) {
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
