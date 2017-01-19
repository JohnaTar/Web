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
    </head>
    <script >
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
                        <center><h2>เพิ่มหัวข้อทดสอบ</h2></center>
    <?php
    if ($_POST) {
        
    
        include("connect.php"); 


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
mysqli_close($conn);
    }


    ?>

<div class="alert alert-danger alert-dismissable">หากกำหนดวันเวลา จะทำให้ผู้เข้าทดสอบสามารถทำแบบทดสอบได้เฉพาะในวันและช่วงเวลาที่กำหนดเท่านั้น</div>
<div class="alert alert-warning alert-dismissable">หากการกำหนดวันเดือนปีและเวลาเป็นช่อง text ธรรมดา แสดงว่าเบราเซอร์ที่ท่านกำลังใช้อยู่ 
อาจยังไม่สนับสนุนอิลิเมนต์เหล่านี้ เราแนะนำให้ใช้ Chrome หรือ Opera เวอร์ชั่นล่าสุด</div>

<form class="form-horizontal" method="POST">


<!-- *****************************first from********************** -->
          <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">หัวข้อการทดสอบ</label>  
                <div class="col-md-4">
                    <input name="subject" type="text" class="form-control input-md" id="text" >
                    <span id="mdd"></span>
    
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

            
</form>

             <div class="form-group">
                <label class="col-md-4 control-label" for=""></label>
                <div class="col-md-4">
            <button id="ok"  class="btn btn-primary" >ตกลง</button>
            <a href="Create"><button class="btn btn-success">แสดงแบบทดสอบ</button> </a>

                </div>
            </div>

                            
                        
                        
                           
   
   
  
  


 
 
  






    </body>

</html>