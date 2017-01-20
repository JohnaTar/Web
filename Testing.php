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
    $sql ="SELECT stwSubject_text , DATE_FORMAT(stwDate_test, '%d/%m/%y'),
                               TIME_FORMAT(stwTime_start,'%H:%i'),
                               TIME_FORMAT(stwTime_end, '%H:%i'),
                               stwDate_test, stwTime_start ,stwTime_end
            FROM stwSubject WHERE  stwSubject = '".$_GET['subject_id']."'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $subject = $row[0];
    $datetime = $row[1]." ".$row[2]."-".$row[3];
    if ($row[1] =="00/00/0000")   {
        $datetime = "ไม่กำหนดวันเวลา";
    }

    
 ?>
<?php echo "[$datetime]"; ?>


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