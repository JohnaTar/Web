<?php
session_start();

if ($_SESSION['ses_id']=='') {
     echo "<script>alert('PLEASE LOGIN')</script>";
     echo "<script>window.location='index.php'</script>";
 
  } 
  

?>
<!DOCTYPE html>



    <head>
        <?php 
        include("head/head.php");



        
        ?>
        <title>SB Admin - Bootstrap Admin Template</title>
       
  
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
                                <i class="fa fa-puzzle-piece"></i> แบบทดสอบ
                            </li>
                        </ol>
                    </div>
                </div> 

             <div class="row">
                <div class="col-md-12"> 
<?php 
      $subject_id = $_GET['subject_id'];
      $sql = "SELECT stwSubject_text,
        DATE_FORMAT(stwDate_test, '%d/%m/%Y'), 
        TIME_FORMAT(stwTime_start, '%H:%i'),  
        TIME_FORMAT(stwTime_end, '%H:%i'),
        stwDate_test, stwTime_start, stwTime_end
      FROM stwSubject WHERE stwSubject_id = $subject_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$datetime = $row[1] . "   " . $row[2]. "-" . $row[3];
if($row[1] == "00/00/0000") {
  $datetime = "-ไม่กำหนดวันเวลา-";
}
?>
<center><h2><div class="alert alert-info alert-dismissable">เรื่อง : <?php echo $row['stwSubject_text']; ?></div></h2> </center>
<center><h2><div class="alert alert-success alert-dismissable"> <?php echo "[$datetime]"; ?></div></h2> </center>

<?php
$now = strtotime("now");
$start = $row[4] . " " . $row[5];
$end = $row[4] . " " . $row[6];
$start = strtotime($start);
$end = strtotime($end);
//ถ้าเป็นผู้ทำแบบทดสอบ และกำหนดวันเวลาที่แน่นอนในการทำแบบทดสอบ
//แล้วถ้าไม่อยู่ในช่วงวันเวลาที่กำหนดในการทำแบบทดสอบ จะไม่แสดงคำถาม
if(($_SESSION['status'] == "3") && ($row[1] != "00/00/0000") && (($start > $now) || ($end < $now))) {
  echo "<script>alert('ขณะนี้ไม่อยู่ในช่วงวันเวลาที่กำหนดในการทำแบบทดสอบ')</script>";
    echo "<script>window.location='Create'</script>";

      
  
  exit;
} 

if(isset($_SESSION['ID'])) {
  $testee_id = $_SESSION['ID'];
  $sql = "SELECT COUNT(*) FROM stwScore WHERE stwSubject_id = $subject_id AND stwUser_id = $testee_id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  if($row[0] !=0) {
    mysqli_close($conn);
    echo "<script>alert('ท่านได้ทำแบบสอบทดสอบหัวข้อนี้ไปแล้ว ไม่สามารถทำซ้ำได้อีก')</script>";
    echo "<script>window.location='Create'</script>";
    exit;
  }
}
?>



                </div>
             </div>          
 
                    <!-- Row -->
                 </div>
    </div>
</div>
 <!-- *******************end table************************ -->

  
  


 
 
  <?php include("modal/addQuest.php");?>





    </body>

</html>