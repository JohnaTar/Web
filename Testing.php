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
    <script>
      
      $(function() {  
  $(':radio').change(function(event) {
    var subject_id = <?php echo $_GET['subject_id']; ?>;
    var question_id = event.target.name;
    var choice_id = event.target.value;
    
    $.ajax({
      url: 'Select-choice.php',
      type: 'post',
      data: {'stwSubject_id':subject_id, 'stwQuestion_id':question_id, 'stwchoice_id':choice_id},
      dataType: 'script',
      beforeSend: function() {
        $('body').css({cursor: 'wait'});
      }, 
      complete: function() {
        $('body').css({cursor: 'default'});
      }
    });
  });
  
  $('#btnSubmit').click(function() {
    if(confirm('ยืนยันการเสร็จสิ้นการทำแบบทดสอบ?')) {
      var stwSubject_id = <?php echo $_GET['subject_id']; ?>;
      window.location = 'finish.php?id=' + stwSubject_id;
    }
  });
});

    </script>
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
      $sql = "SELECT stwExam_name,
        DATE_FORMAT(stwExam_date, '%d/%m/%Y'), 
        TIME_FORMAT(stwExam_start, '%H:%i'),  
        TIME_FORMAT(stwExam_end, '%H:%i'),
        stwExam_date, stwExam_start, stwExam_end
      FROM stwExam WHERE stwExam_id = $subject_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$datetime = $row[1] . "   " . $row[2]. "-" . $row[3];

?>
<center><h2><div class="alert alert-info alert-dismissable">เรื่อง : <?php echo $row['stwExam_name']; ?></div></h2> </center>
<center><h2><div class="alert alert-success alert-dismissable"> <?php echo "[$datetime]"; ?></div></h2> </center>

<?php
/*
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
*/
if(isset($_SESSION['ID'])) {
  $testee_id = $_SESSION['ID'];
  // $sql = "SELECT COUNT(*) FROM stwscore WHERE stwSubject_id = $subject_id AND stwUser_id = $testee_id";

  $sql ="SELECT COUNT(*) FROM stwExam_User WHERE stwUser_id =$testee_id AND stwExam_id=$subject_id AND stwScore";
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

 
   
<?php
//$sql = "SELECT * FROM stwQuestion WHERE stwSubject_id = '$subject_id' ORDER BY RAND ()";
$sql ="SELECT stwQuestion.stwQuestion_text,stwExam_detail.stwExam_id,
       stwExam_detail.stwQuestion_id
       FROM stwExam_detail
       INNER JOIN stwQuestion ON stwExam_detail.stwQuestion_id = stwQuestion.stwQuestion_id
       WHERE stwExam_id =$subject_id";
$result = mysqli_query($conn, $sql);
  $i =1;
while($data = mysqli_fetch_array($result)) {
  //แสดงลำดับข้อ
  $question_text = $data['stwQuestion_text'];
  $question_id = $data['stwQuestion_id'];

  ?><div class="alert alert-warning alert-dismissable" >ข้อที่ : <?php echo $i;?>
    
  </div>
 
<?php
  $sql = "SELECT * FROM stwChoice WHERE stwQuestion_id = $question_id ORDER BY RAND ()";
  $r = mysqli_query($conn, $sql);
?>
 <form class="form-horizontal">
     <div class="form-group">
        <label class="col-md-2 control-label">คำถาม</label>
            <div class="col-md-4">
                <input type="text" value="<?php echo $question_text; ?> " class="form-control"  readonly>
                   
            </div>
      </div>
      </form>
  

<?php

      
  while($ch = mysqli_fetch_array($r)) {



    echo "

    <div class=\"form-group\">
        <div class=\"radio\">
    <label class=\"col-md-1 control-label\">คำคอบ</label>

          <input type=\"radio\"  name=\"$question_id\" value=\"{$ch['stwChoice_id']}
          </div>
        <div class=\"choice\">{$ch['stwChoice_text']}
      </div>
    </div>
        ";
?>




<?php }  $i++;   }  mysqli_close($conn); ?>



<!-- *********************************ปุ่ม************ -->            
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="btnSubmit" name="submit" class="btn btn-primary" >เสร็จสิ้นการทดสอบ</button>
                </div>
            </div>
 
                    <!-- Row -->
                 </div>
    </div>
</div>
 <!-- *******************end table************************ -->

   
    
                </div>
            </div>
  


 
 
  <?php include("modal/addQuest.php");?>





    </body>

</html>