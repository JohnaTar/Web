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
    <script >


    
 $(function () {
  $("#text").change(function(){
   
    $.ajax({
      url: "ckAjax.php",
      data: "text=" + $("#text").val(),
      type: "POST",
      
      
      
      success: function(data) 
      { 
        if(data ==true)
        { 
         $("#ok").attr("disabled",false);
              
            $("#mdd").html("<span style='color:green'>หัวข้อการอบรมนี้สามารถสร้างได้</span>");
            }else if (data ==false) {
              
                $("#ok").attr("disabled",true);
               
               
            $("#mdd").html("<span style='color:red'>หัวข้อการอบรมมีอยุ่ในระบบแล้ว</span>");

            }
        }
    
      });
    });
  });    



    
  
</script>

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
                                <i class="fa fa-table"></i>แบบทดสอบ
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- ****************start table****** -->




                <div class="row">
                    <div class="col-md-12">
                        <center><h2>แก้ไขหัวข้อทดสอบ</h2></center>
    <?php
     include("connect.php"); 
     if (isset($_POST['ok'])) {
    $subject = $_GET['subject_id'];
    $subject_text =$_POST['subject'];
    $date_test = $_POST['date'];
    $time_start =$_POST['time_start'];
    $time_end =$_POST['time_end'];
   
        $sql ="UPDATE stwSubject SET

          stwSubject_text = '$subject_text',
          stwDate_test ='$date_test',
          stwTime_start ='$time_start',
          stwTime_end ='$time_end'
          WHERE stwSubject_id = '$subject' "; 
        $result = mysqli_query($conn,$sql);
        if ($result) { 

             echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>แก้ไขข้อมูลเรียบร้อย</div>';
            
        } else{
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>เกิดข้อผิดพลาดในการแก้ไขข้อมูล กรุณาลองใหม่</div>';


        }
    }
    
       


    $subject = $_GET['subject_id'];
    $sql = "SELECT * FROM stwSubject WHERE stwSubject_id =$subject";
    $res =mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($res,MYSQLI_ASSOC);


    ?>
    <a href="Create"><button class="btn btn-success">แสดงแบบทดสอบ</button> </a>
    <br>
    <br>

<div class="alert alert-danger alert-dismissable">การกำหนดวันเวลา จะทำให้ผู้เข้าทดสอบสามารถทำแบบทดสอบได้เฉพาะในวันและช่วงเวลาที่กำหนดเท่านั้น</div>


<form class="form-horizontal" method="POST">


<!-- *****************************first from********************** -->
          <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">หัวข้อการทดสอบ</label>  
                <div class="col-md-4">
                    <input name="subject" type="text" class="form-control input-md" id="text"  value="<?php echo $row['stwSubject_text'];?>">
                    <span id="mdd"></span>
    
                </div>
            </div>

            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">วันเวลาที่จะทดสอบ</label>  
                <div class="col-md-4">
                   
                    <label >วันที่จะทดสอบ</label>  
                    <input type="text" id="datepicker"  class="form-control input-md" name="date" value="<?php echo $row['stwDate_test'];?>">
                    <br>
                    <label >เวลาเริ่ม</label>
                    <input type="time"  class="form-control input-md" name="time_start" value="<?php echo $row['stwTime_start'];?>">
                    <br> 
                    <label >เวลาสิ้นสุด</label>
                    <input type="time" class="form-control input-md" name="time_end" value="<?php echo $row['stwTime_end'];?>" >

    
                </div>
            </div>

            


             <div class="form-group">
                <label class="col-md-4 control-label" for=""></label>
                <div class="col-md-4">
            <button name="ok"  class="btn btn-primary" >ตกลง</button>
            

                </div>
            </div>

     </form> 
<?php
   
        
mysqli_close($conn);
    
     

?>                      
                        
                        
                           
   
   
  
  


 
 
  






    </body>

</html>