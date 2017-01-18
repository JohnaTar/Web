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
        
        <title>SB Admin - Bootstrap Admin Template</title>
<script type="text/javascript">
    $(function() {
    $('#ok').click(function(event) { 
        if($(':text').val().length == 0) {
            alert('ท่านยังไม่ได้กำหนดหัวข้อการทดสอบ');
            return;
        }
        
        if($(':radio:checked').length == 0) {
            alert('ท่านยังไม่ได้กำหนดวันเวลาที่จะทดสอบ');
            return;
        }
        $('form').submit();
    });
    
    $('#cancel').click(function() {
        window.location = 'index.php';
    });
});
            

 </script>
  
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
                                <i class="fa fa-table"></i> ข้อมูลแผนก
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- ****************start table****** -->




                <div class="row">
                    <div class="col-md-12">
                        <center><h2>เพิ่มหัวข้อทดสอบ</h2></center>
    <?php
        include("connect.php"); 
if (isset($_POST['subject'])) {

    $subject = $_POST['subject'];
    $date_test = $_POST['date'];
    $time_start ="";
    $time_end ="";
    if ($_POST['datetime']=="yes") {
         $time_start = $_POST['time_start'];
         $time_end = $_POST['time_end'];

    }

        $sql ="REPLACE INTO stwSubject VALUES('','$subject','$date_test',
        '$time_start','$time_end')";
        $result = mysqli_query($conn,$sql);
        if ($result) { 

             echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>บันทึกข้อมูลเรียบร้อย</div>';
            
        } else{
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>เกิดข้อผิดพลาดในการบันทึกข้อมูล กรุณาลองใหม่</div>';

        }

  
}

    ?>

<div class="alert alert-danger alert-dismissable">หากกำหนดวันเวลา จะทำให้ผู้เข้าทดสอบสามารถทำแบบทดสอบได้เฉพาะในวันและช่วงเวลาที่กำหนดเท่านั้น</div>
<form class="form-horizontal" method="POST">


<!-- *****************************first from********************** -->
          <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">หัวข้อการทดสอบ</label>  
                <div class="col-md-4">
                    <input name="subject" type="text" class="form-control input-md" required="" >
    
                </div>
            </div>

            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">วันเวลาที่จะทดสอบ</label>  
                <div class="col-md-4">
                    <input name="datetime"  type="radio"   value="no">ไม่กำหนด(ทดสอบเมื่อไหร่ก็ได้)<br>
                    <input name="datetime" type="radio"   value="yes">กำหนดวันเวลา<br>
                    <input type="date" class="form-control input-md" name="date" ><br>
                    <input type="time" class="form-control input-md" name="time_start" ><br>
                    <input type="time" class="form-control input-md" name="time_end" >

    
                </div>
            </div>

             <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="ok" name="button" class="btn btn-primary" >ตกลง</button>
                </div>
            </div>
</form>

                            
                        
                        
                           
   
   
  
  


 
 
  






    </body>

</html>