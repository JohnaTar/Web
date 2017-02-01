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
                                <i class="fa fa-puzzle-piece"></i> จัดการแบบทดสอบ
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- *********************************start table************ -->   
                 <div class="row">
                    <div class="col-md-12">
                        <center><h2>จัดการแบบทดสอบ</h2></center>

                            
   
    <?php
     

        include("connect.php");

       $subject_id = $_GET['subject_id'];
       $sql = "SELECT * FROM stwQuestion WHERE stwSubject_id = $subject_id ";
       $result = mysqli_query($conn, $sql);
       while($data = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

                $question_text = $data['stwQuestion_text'];
                $question_id = $data['stwQuestion_id'];
                 
        ?>

                 <?php echo $question_text; ?> 

        <?php
            $sql = "SELECT * FROM stwChoice WHERE stwQuestion_id = $question_id ORDER BY stwChoice_id ASC";
                 $r = mysqli_query($conn, $sql);
                 while($ch = mysqli_fetch_array($r)) {

                    ?>
                    
                    <?php echo $ch['stwChoice_text'];  ?>




                

               




                               
                                                      
                                    <?php } }
                                mysqli_close($conn);
                                ?>
                             
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