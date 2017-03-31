<?php
session_start();

if ($_SESSION['ses_id']=='') {
     echo "<script>alert('PLEASE LOGIN')</script>";
     echo "<script>window.location='index'</script>";
 
  } 
?>
<!DOCTYPE html>


    <head>
        <?php include("head/head.php");

         
        ?>
<style type="text/css">
    .alert-message
{
    margin: 20px 0;
    padding: 20px;
    border-left: 3px solid #eee;
}
.alert-message h4
{
    margin-top: 0;
    margin-bottom: 5px;
}
.alert-message p:last-child
{
    margin-bottom: 0;
}
.alert-message code
{
    background-color: #fff;
    border-radius: 3px;
}
.alert-message-success
{
    background-color: #F4FDF0;
    border-color: #3C763D;
}
.alert-message-success h4
{
    color: #3C763D;
}
</style>
     
  
    </head>

        <body>
            
            
            <div id="wrapper">

<!-- *************************MENU BAR************************** -->
                <?php include("menu/menuUser.php"); ?>
<!-- *********************************************************** -->
        <div id="page-wrapper">
            <div class="container-fluid">            
                <div class="row">
                    <div class="col-md-12">                    
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="user.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> หน้าแรก
                            </li>
                        </ol>
                    </div>
                </div> 

<!-- *****************start table************************* -->                                               
                <div class="row">
                    <div class="col-md-12 text-center" >
                    <h1>ยินดีต้อนรับ </h1><h2>การพัฒนาเว็บแอพพลิเคชั่นการอบรมด้านความปลอดภัยให้กับพนักงานโรงงาน</h2>
                    <h1 ><marquee direction="right" >ข่าวประชาสัมพันธ์<i class="fa fa-exclamation-triangle" style="color:red" aria-hidden="true"></i></marquee></h1>
  
                           <?php 
                           include("connect.php");
                           $USERID =$_SESSION['ID'];
                           $TIME = date("d-m-Y");

                           
                          
                      
                              $sq ="  SELECT stwExam_User.stwUser_id, stwExam_User.stwExam_id,
                                                    stwExam_User.stwScore,stwExam.stwExam_name,
                                                    stwExam.stwExam_id,
                      DATE_FORMAT(stwExam_date, '%d-%m-%Y') AS stwExam_date,
                      TIME_FORMAT(stwExam_start, '%H:%i') AS   stwExam_start,
                      TIME_FORMAT(stwExam_end, '%H:%i') AS stwExam_end
FROM
stwExam_User
INNER JOIN stwExam ON stwExam_User.stwExam_id = stwExam.stwExam_id
 WHERE stwUser_id =$USERID AND stwScore IS NULL";
                            $query=mysqli_query($conn,$sq);
                            while ($tt=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                            


                        if ($TIME <= $tt['stwExam_date']) {
                            echo  '
                            <div class=" col-md-12">
                              <div class="alert-message alert-message-success">

                               <h4> การทดสอบ : '.$tt['stwExam_name'].'</h4>
                                <p> วันที่ : '.$tt['stwExam_date'].' เวลา : '.$tt['stwExam_start'].' - '.$tt['stwExam_end'].'
                                <br><strong> ทำแบบทดสอบ</strong>
                                <a href="http://localhost/Testing.php?subject_id='.$tt['stwExam_id'].'">
                            Click Here</a>
                                </p>

                              </div>
                            </div>



                            ';
                           
                        }else{
                            


                        }



/*
<div class=" col-md-12">
            <div class="alert-message alert-message-success">
                <h4>
                    Alert Message Success</h4>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s.<strong> strong
                        message</strong>. <a href="http://www.jquery2dotnet.com/2013/07/cool-notification-css-style.html">
                            Cool Notification Css Style</a></p>
            </div>
        </div>
           */                 
                         
}





                           ?>

                   

                        
                    </div>
                </div> <!-- row  -->

            </div>  <!-- container-fluid  -->

        </div>  <!-- Page wraper -->
</div>

  
  


 
 
  






    </body>

</html>
