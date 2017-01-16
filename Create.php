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
<!-- *********************************start table************************************* -->                                               
                <div class="row">
                    <div class="col-md-12">
                        <center><h2>แบบทดสอบ</h2></center>
                            <div class="table-responsive">

                       
                         <table class="table table-striped table-hover" id="myTable">
                                <thead>
                                    <tr>
                                          
                                        <th>หัวข้อแบบทดสอบ</th>
                                      
                                        
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>   

                                <tr>
   
    <?php
     

    $link = @mysqli_connect("localhost", "root", "", "webtesting") or die(mysqli_connect_error());
//อ่านหัวข้อแบบทดสอบจากตาราง subject
//ให้รูปแบบวันเดือนปีให้เป็น date-month-year และเวลาเป็น hour:minute
    $sql = "SELECT *, 
                DATE_FORMAT(date_test, '%d-%m-%Y') AS date_test, 
                TIME_FORMAT(time_start, '%H:%i') AS time_start,  
                TIME_FORMAT(time_end, '%H:%i') AS time_end   
            FROM subject ORDER BY  subject_id DESC";

    $result = mysqli_query($link,$sql);

    while($data = mysqli_fetch_array($result)) {
    $subject_id = $data['subject_id'];
    $dt = "วันที่ " . $data['date_test'] . " เวลา " . $data['time_start'] . " - " . $data['time_end'];  
    if($data['date_test'] == "00-00-0000") {   //กรณีที่ไม่กำหนดวันเวลาทำแบบทดสอบเอาไว้
        $dt = "ไม่ระบุ";
    }
    $sql = "SELECT COUNT(*) FROM question WHERE subject_id = $subject_id";  //นับจำนวนคำถามของหัวข้อนี้
    $r = mysqli_query($link, $sql);
    $num_q = 0;
    if($r) {
        $row = mysqli_fetch_array($r);
        $num_q = $row[0];
    }
    //สร้างปุ่มให้สอดคล้องกับชนิดผู้ใช้ระหว่าง tester และ testee
    $bt = "";
    $q = "subject_id=$subject_id";
    if($_SESSION['status']  == 3 ) {
        $bt = '<a href="add-question.php?'.$q.'"> <button type="button"  class="btn btn-success" >ทำแบบทดสอบ</button> </a>';
         //'<a href="testing.php?'.$q.'">ทำแบบทดสอบ</a>';
    }
    else  {
      $bt = //'<a href="add-question.php?'.$q.'">เพิ่มคำถาม</a>'. origin
                '<a href="add-question.php?'.$q.'"> <button type="button"  class="btn btn-success" >เพิ่มคำถาม</button> </a>'.

             // '<a href="testing.php?'.$q.'">ดูแบบทดสอบ</a>'.
                 '<a href="add-question.php?'.$q.'"> <button type="button"  class="btn btn-info" >ดูแบบทำสอบ</button> </a>'.
             // '<a href="#">ลบ/แก้ไข</a>';
                 '<a href="add-question.php?'.$q.'"> <button type="button"  class="btn btn-warning" >ลบ/แก้ไข</button> </a>';
  }   
?>

    

                                   
                <td>
                    
            <?php echo '<div class="subject">'.$data['subject_text'].'</div>
            <div class="question">'.$num_q.' คำถาม</div><br>
            <div class="datetime">กำหนดทำแบบทดสอบ: '.$dt.'</div>
          '.$bt.'<a href="score.php?'.$q.'"><button type="button"  class="btn btn-danger" >ดูผลทดสอบ</button> </a></a>
                <hr>';; ?>
                </td>
               






                               
                                 </tr>                       
                                <?php } 
                                mysqli_close($link);
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
<?php include("modal/modalAdmin.php");
     
      include("modal/authen.php");
 ?>
  
  


 
 
  






    </body>

</html>