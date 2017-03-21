<?php
session_start();
$_SESSION['exam_id'] = $_GET['subject_id'];
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


$(document).ready(function() {
    
    var navListItems = $('ul.setup-panel li a'),
        allWells = $('.setup-content');

    allWells.hide();

    navListItems.click(function(e)
    {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this).closest('li');
        
        if (!$item.hasClass('disabled')) {
            navListItems.closest('li').removeClass('active');
            $item.addClass('active');
            allWells.hide();
            $target.show();
        }
    });
    
    $('ul.setup-panel li.active a').trigger('click');
    
    // DEMO ONLY //
    $('#activate-step-2').on('click', function(e) {
        $('ul.setup-panel li:eq(1)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-2"]').trigger('click');
        $(this).remove();
    })
    
    $('#activate-step-3').on('click', function(e) {
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
        $(this).remove();
    })
    
    $('#activate-step-4').on('click', function(e) {
        $('ul.setup-panel li:eq(3)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-4"]').trigger('click');
        $(this).remove();
    })
    
    $('#activate-step-3').on('click', function(e) {
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
        $(this).remove();
    })
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


<form class="form-horizontal" method="POST"  action="save_edit_exam">

<div class="row">
    <div class="col-md-12">
                        <center><h2>แก้ไขหัวข้อทดสอบ</h2></center>
   
        <div class="row form-group ">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                    <li class="active"><a href="#step-1">
                        <h4 class="list-group-item-heading">Step 1</h4>
                        <p class="list-group-item-text">สร้างหัวข้อทดสอบ</p>
                    </a></li>
                    <li class="disabled"><a href="#step-2">
                        <h4 class="list-group-item-heading">Step 2</h4>
                        <p class="list-group-item-text">เลือกผู้ทดสอบ</p>
                    </a></li>
                    <li class="disabled"><a href="#step-3">
                        <h4 class="list-group-item-heading">Step 3</h4>
                        <p class="list-group-item-text">เลือกคำถาม</p>
                    </a></li>
                     
                </ul>
            </div>
        </div>

        <div class="row setup-content" id="step-1">
        <div class="col-md-12">
            <div class="col-md-12  text-center">
               

<!-- <form> -->               
                
    <div class="container col-md-12">
        <div class="row clearfix">
            <div class="col-md-12 well column">

            <?php  
                include("connect.php");
                $exam_id =$_GET['subject_id'];
              
                $sql ="SELECT *, 
                DATE_FORMAT(stwExam_date, '%d-%m-%Y') AS stwExam_test, 
                TIME_FORMAT(stwExam_start, '%H:%i') AS stwExam_start,  
                TIME_FORMAT(stwExam_end, '%H:%i') AS stwExam_end   
            FROM stwExam WHERE stwExam_id =$exam_id ";
            $reslut = mysqli_query($conn,$sql);
            $rows=mysqli_fetch_array($reslut,MYSQLI_ASSOC);



             ?>

                    <input type="hidden" name="Exam_no" value="<?php echo $exam_id; ?>">


<!-- *****************************first from********************** -->

          <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">หัวข้อการทดสอบ</label>  
                <div class="col-md-4">
                    <input name="subject" type="text" class="form-control input-md" id="text" required="" value="<?php  echo $rows['stwExam_name'];?>">
                    <span id="mdd"></span>
    
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">เกณฑ์การผ่านแบบทดสอบ</label>  
                <div class="col-md-4">
                    <input name="Past" type="text" class="form-control input-md" id="text" required=""  
                    value="<?php echo $rows['stwExam_past']; ?>" >
                    <span id="mdd"></span>
    
                </div>
            </div>
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">วันเวลาที่จะทดสอบ</label>  
                <div class="col-md-4">
                   
                    <label >วันที่จะทดสอบ</label>  
                    <input type="text" id="datepicker"  class="form-control input-md" name="date"  
                    value="<?php echo $rows['stwExam_date']; ?>"><br> <label >เวลาเริ่ม</label>
                    <input type="text" id ="timepicker" class="form-control input-md" name="time_start" 
                    value="<?php  echo $rows['stwExam_start'];?>"><br> 
                    <label >เวลาสิ้นสุด</label>
                    <input type="text"  id ="timepicker1" class="form-control input-md" name="time_end" 
                    value="<?php echo $rows['stwExam_end']; ?>" >

    
                </div>
            </div>




    
            </div>
        </div>
        
    </div>
                
<!-- </form> -->
                
                <button id="activate-step-2" class="btn btn-success btn-md"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></i></button>
            </div>
        </div>
    </div>


<script type="text/javascript">
    $(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('input:checkbox[name="select[]"]').each(function(){
                this.checked = true;
            });
        }else{
             $('input:checkbox[name="select[]"]').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('input:checkbox[name="select[]"]').on('click',function(){
        if($('input:checkbox[name="select[]"]:checked').length == $('input:checkbox[name="select[]"]').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
    });

    
</script>


  <div class="row setup-content" id="step-2">
    <div class="col-md-12">
        <div class="col-md-12  ">
                
      
                <br>
                <ul class="main">
    




  <div class="row clearfix">
            <div class="col-md-12 well column">
             <div class="table-responsive">

                       
                        
                           
                         <table class="table table-striped table-hover" id="myTable1">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อ-นามสกุล</th>                    
                                        <th>แผนก</th>
                                        <th>ตัวเลือก</th>
                                        <th>เมนู</th>

                                      
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>   

                                <tr>
   
    <?php
     

        include("connect.php");
        
          
          




                   
               

      
              


             

      
        $sql ="SELECT
    stwPrefix.stwPrefix_name,stwDepartment.stwDept_name,
    stwUser.stwUser_id,stwUser.stwLastname,stwUser.stwFirstname
    FROM
    stwUser
    INNER JOIN stwPrefix ON stwUser.stwPrefix_id = stwPrefix.stwPrefix_id
    INNER JOIN stwDepartment ON stwUser.stwDept_id = stwDepartment.stwDept_id
    ";
    $res =mysqli_query($conn,$sql);
    $i =1;

  while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
  $stwUser_id = $row['stwUser_id'];
  $sqq = "SELECT stwExam_User.stwExam_User_id,stwExam_User.stwExam_id,stwExam_User.stwUser_id
              FROM stwExam_User WHERE stwExam_id=$exam_id AND stwUser_id =$stwUser_id";  
            $choose = mysqli_query($conn, $sqq);
            $roww= mysqli_fetch_array($choose,MYSQLI_ASSOC);
            $id = $roww['stwUser_id'];


          
      

  
 

    ?>
            
                <td> <?php echo $i; ?></td>                   
                <td><?php echo 
                    $row['stwPrefix_name']." ".
                    $row['stwFirstname']." ".
                    $row['stwLastname']; ?></td>
                <td><?php echo $row['stwDept_name']; ?></td>
                <td><?php 
                        if($id == $stwUser_id) { 
                    
                      echo '<center><i class="fa fa-check fa-2x"style="color:green"></i> </center>';   
                    
            }else{
                       echo '<center><i class="fa fa-times fa-2x" style="color:red"></i>  </center>';    
            } 
            ?>
           

                </td>  
                 <td><?php 
                        if($id == $stwUser_id) { 
                    
                      echo '<button  type="button" class="btn btn-warning" onclick="delete_user_exam('.$roww['stwExam_User_id'].');"><i class="fa fa-eraser" aria-hidden="true"></i></button>';   
                    
            }else{
                       echo '   <button type="button" class="btn btn-info" onclick="edit_exam_user('.$row['stwUser_id'].');"><i class="fa fa-sign-in" aria-hidden="true"></i></button>';    
            } 
            ?>

                </td>   

                

              
               
                
                



                               
                                 </tr>                       
                              <?php $i++;}  
          mysqli_close($conn); ?>
                </tbody>
                                </tbody>
                            </table>
                            
                            
               
            </div>

        </div>
                <center>
                <button id="activate-step-3" class="btn btn-success btn-md"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i></i></button></center>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
    $('#Q_all').on('click',function(){
        if(this.checked){
            $('input:checkbox[name="question[]"]').each(function(){
                this.checked = true;
            });
        }else{
             $('input:checkbox[name="question[]"]').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('input:checkbox[name="question[]"]').on('click',function(){
        if($('input:checkbox[name="question[]"]:checked').length == $('input:checkbox[name="question[]"]').length){
            $('#Q_all').prop('checked',true);
        }else{
            $('#Q_all').prop('checked',false);
        }
    });
    });

    
</script>




    <div class="row setup-content" id="step-3">
        <div class="col-md-12">
       
            <div class="col-md-12 well ">

            <div class="table-responsive">
            
               <table class="table table-striped table-hover" id="myTable2">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>คำถาม</th>                    
                                        <th>ชุดคำถาม</th>
                                        <th>ตัวเลือก</th>
                                        <th>เมนู</th>

                                      
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>   

                                <tr>
   
    <?php
     

        include("connect.php");
       
              


             

      
        $sql ="SELECT
stwSubject.stwSubject_name,
stwQuestion.stwQuestion_text,
stwQuestion.stwQuestion_id
FROM
stwQuestion
INNER JOIN stwSubject ON stwQuestion.stwSubject_id = stwSubject.stwSubject_id
    ";
    $res =mysqli_query($conn,$sql);
    $i =1;

  while($rowsss=mysqli_fetch_array($res,MYSQLI_ASSOC)){

  $Q_id = $rowsss['stwQuestion_id'];
  $rr="SELECT stwExam_detail.stwExam_detail_id,stwExam_detail.stwExam_id,
                   stwExam_detail.stwQuestion_id
        FROM stwExam_detail
        WHERE stwExam_id = $exam_id AND stwQuestion_id =$Q_id";
           $tt =mysqli_query($conn,$rr);
           $ww= mysqli_fetch_array($tt,MYSQLI_ASSOC);
        $A_id = $ww['stwQuestion_id'];


    ?>

                <td> <?php echo $i; ?></td>                   
                <td><?php echo $rowsss['stwQuestion_text']; ?></td>
                <td><?php echo $rowsss['stwSubject_name']; ?></td>
                <td><?php 
                        if($Q_id == $A_id) { 
                    
                      echo '<center><i class="fa fa-check fa-2x"style="color:green"></i> </center>';   
                    
            }else{
                       echo '<center><i class="fa fa-times fa-2x" style="color:red"></i>  </center>';    
            } 
            ?>
                  </td>  
                  <td>
                      <?php 
                        if($Q_id == $A_id) { 
                    
                    echo '<button  type="button" class="btn btn-warning" onclick="delete_quest_exam('.$ww['stwExam_detail_id'].');"><i class="fa fa-eraser" aria-hidden="true"></i></button>';   
                    
            }else{
                      echo '   <button type="button" class="btn btn-info" onclick="edit_quest_exam('.$rowsss['stwQuestion_id'].');"><i class="fa fa-sign-in" aria-hidden="true"></i></button>';    
            } 
            
            ?>
                  </td>
              
               
                
                



                               
                                 </tr>                       
                              <?php $i++;}  mysqli_close($conn); ?>
                </tbody>
                                </tbody>
                            </table>
                </div>
               
















                
<center>
<button type="submit" class="btn btn-primary btn-md"><i class="fa fa-floppy-o fa-2x     " aria-hidden="true"></i></button></center>

                
             
            </div>
        </div>
    </div>






    
                        

    </div>            
</div>



















  




</form>





                    
   
            </div>
        </div> 
     </div>                  
                        
                           
   
   
  


 
 
  






    </body>

</html>
