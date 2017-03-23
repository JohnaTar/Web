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
<?php  include("modal/show_score.php"); ?>
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
                                echo ' <a href="New_subject"> <button type="button" class="btn btn-info btn-xl" ><i class="fa fa-plus fa-2x" aria-hidden="true"></i></button></a>';
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
   if ($_SESSION['status']==3) {
       
        $sql ="SELECT stwExam_User.stwExam_id,stwExam_User.stwUser_id,
                      stwExam.stwExam_name,
                      DATE_FORMAT(stwExam_date, '%d-%m-%Y') AS stwExam_date,
                      TIME_FORMAT(stwExam_start, '%H:%i') AS   stwExam_start,
                      TIME_FORMAT(stwExam_end, '%H:%i') AS stwExam_end,
                      stwExam.stwExam_create,stwExam.stwExam_past
               FROM stwExam_User 
               INNER JOIN stwExam 
               ON stwExam_User.stwExam_id = stwExam.stwExam_id
               WHERE stwExam_User.stwUser_id = '".$_SESSION['ID']."'";

   }else {
    $sql = "SELECT *, 
                DATE_FORMAT(stwExam_date, '%d-%m-%Y') AS stwExam_test, 
                TIME_FORMAT(stwExam_start, '%H:%i') AS stwExam_start,  
                TIME_FORMAT(stwExam_end, '%H:%i') AS stwExam_end   
            FROM stwExam ORDER BY  stwExam_id DESC";
}

    $result = mysqli_query($conn,$sql);

     while($data = mysqli_fetch_array($result)) {
    $subject_id = $data['stwExam_id'];
    $dt = "วันที่ " . $data['stwExam_date'] . " เวลา " . $data['stwExam_start'] . " - " . $data['stwExam_end']; 
    $dp =$data['stwExam_past']; 
/////////////////////////////////////////////////////////////////////////////////////////////
   
    $sql = "SELECT COUNT(*) FROM stwExam_detail WHERE stwExam_id = $subject_id";  //
    $r = mysqli_query($conn, $sql);
    $num_q = 0;
    if($r) {
        $row = mysqli_fetch_array($r);
        $num_q = $row[0];
    }
    //สร้างปุ่มให้สอดคล้องกับชนิดผู้ใช้ระหว่าง tester และ testee

    $bt = ""; 
    $q = "subject_id=$subject_id";
   
  
?>


                                   
        <td>
                    
            <?php echo '<div class="subject">'.$data['stwExam_name'].'</div>
             <div class="question">'.$num_q.' คำถาม</div><br>  
            <div class="datetime">กำหนดทำแบบทดสอบ: '.$dt.'</div>
            <div class="past"> เกณฑ์การทำแบบทดสอบ: '.$dp.' %</div>
          
                <hr>'; ?>
        </td>
        <td> 
              <?php if ($_SESSION['status']==3) {
    echo '<a href="Testing.php?'.$q.'"> <button type="button"  class="btn btn-success" ><i class="fa fa-play fa-2x" aria-hidden="true"></i></button> 
        </a>
        
        <button type="button" onclick="return show_score('.$subject_id.');" class="btn btn-info btn-xl" data-toggle="modal" data-target="#show_score">  <i class="fa fa-clipboard fa-2x" aria-hidden="true"></i></button>


         ';
                            } else{
                                 
            echo '<a href="Edit_subject.php?'.$q.'"> <button type="button"  class="btn btn-success btn-xl" ><i class="fa fa-cog fa-2x" aria-hidden="true"></i>
            </button></a> :
             <button type="button" onclick="return delete_subject('.$subject_id.');" class="btn btn-danger btn-xl" > <i class="fa fa-times fa-2x" aria-hidden="true"></i></button>';  
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

  
  


 
 
  





    </body>

</html>