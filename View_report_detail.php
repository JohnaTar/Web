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
                                <i class="fa fa-table"></i> ตารางรายงานการทำแบบทดสอบ
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- ****************************start table******************** -->
<?php 
    include("connect.php");

    $sub = $_GET['id'];
    $sql ="SELECT * FROM stwscore WHERE stwSuject_id =$sub ";
    

?>                                               
                <div class="row">
                    <div class="col-md-12">
                    <center><h2>ตารางรายงานการทำแบบทดสอบ</h2></center>
                            

                        </div>
                        <!-- Grid -->
                    </div>
                    <!-- Row -->
                 </div>
    </div>
</div>

  


 
 
  






    </body>

</html>