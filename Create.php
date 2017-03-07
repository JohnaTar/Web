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
<!-- *********************************start table************ -->   

 <div class="row">
                    <div class="col-md-12">
                        <center><h2>แบบทดสอบ</h2></center>
                            <div class="table-responsive">
                            <?php if ($_SESSION['status']==3) {
                                # code...
                            } else{
                                echo ' <a href="New_subject"> <button type="button" class="btn btn-info btn-xl" >เพิ่มแบบทดสอบ</button></a>';
                            }



                            ?>
                           

                       <br>
                       <br>
                         <table class="table table-striped table-hover" id="myTable">
                                <thead>
                                    <tr>
                                          
                                        <th>หัวข้อแบบทดสอบ</th>
                                        <th>เมนู</th>
                                      
                                        
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>   

                                <tr>
   
    <?php
     
include("connect.php");
//อ่านหัวข้อแบบทดสอบจากตาราง subject
//ให้รูปแบบวันเดือนปีให้เป็น date-month-year และเวลาเป็น hour:minute
    $sql = "SELECT *, 
                DATE_FORMAT(stwDate_test, '%d-%m-%Y') AS stwDate_test, 
                TIME_FORMAT(stwTime_start, '%H:%i') AS stwTime_start,  
                TIME_FORMAT(stwTime_end, '%H:%i') AS stwTime_end   
            FROM stwSubject ORDER BY  stwSubject_id DESC";

    $result = mysqli_query($conn,$sql);

     while($data = mysqli_fetch_array($result)) {
    $subject_id = $data['stwSubject_id'];
    $dt = "วันที่ " . $data['stwDate_test'] . " เวลา " . $data['stwTime_start'] . " - " . $data['stwTime_end']; 
    $dp =$data['stwSubject_past']; 
   
    $sql = "SELECT COUNT(*) FROM stwQuestion WHERE stwSubject_id = $subject_id";  //นับจำนวนคำถามของหัวข้อนี้
    $r = mysqli_query($conn, $sql);
    $num_q = 0;
    if($r) {
        $row = mysqli_fetch_array($r);
        $num_q = $row[0];
    }
    //สร้างปุ่มให้สอดคล้องกับชนิดผู้ใช้ระหว่าง tester และ testee
    $bt = "";
    $q = "subject_id=$subject_id";
    if($_SESSION['status']  == 3 ) {
        $bt = '<a href="Testing.php?'.$q.'"> <button type="button"  class="btn btn-success" >ทำแบบทดสอบ</button> </a>';
         //'<a href="testing.php?'.$q.'">ทำแบบทดสอบ</a>';
    }
    else  {
      $bt = //'<a href="add-question.php?'.$q.'">เพิ่มคำถาม</a>'. origin
                '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addQuest" onclick="return show_add_question('.$subject_id.');" >เพิ่มคำถาม </button>'.

             // '<a href="testing.php?'.$q.'">ดูแบบทดสอบ</a>'.
                 '<a href="show_question?'.$q.'"> <button type="button"  class="btn btn-info" >แก้ไขคำถาม</button> </a>';
             // '<a href="#">ลบ/แก้ไข</a>';
      $bb ='<a href="Edit_subject?'.$q.'"> <button type="button"  class="btn btn-info" >แก้ไขแบบทดสอบ</button> </a>'.'<a href=""> <button type="button" onclick="return delete_subject('.$q.');" class="btn btn-danger" >ลบ</button> </a>';
                 
                 
  }   
?>


                                   
        <td>
                    
            <?php echo '<div class="subject">'.$data['stwSubject_text'].'</div>
            <div class="question">'.$num_q.' คำถาม</div><br>
            <div class="datetime">กำหนดทำแบบทดสอบ: '.$dt.'</div>
            <div class="past"> เกณฑ์การทำแบบทดสอบ: '.$dp.' %</div>
          '.$bt.'<a href="score.php?'.$q.'"></a>
                <hr>';; ?>
        </td>
        <td>
              <?php if ($_SESSION['status']==3) {
                                 echo '<a href="View_result_user?'.$q.'"><button type="button"  class="btn btn-info" >ดูผลทดสอบ</button></a> ';
                            } else{
                                echo $bb;
                            }



                        ?>
                           
        </td>




                              
                                 </tr>                       
                                <?php } 
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

  
  


 
 
  <?php include("modal/addQuest.php");?>





    </body>

</html>