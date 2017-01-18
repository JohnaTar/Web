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
<!-- *********************************start table************ -->              <?php if ($_SESSION['Activate']==1) {

    include("menu/Create.php");
            } else {
                echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>กรุณาติดต่อผู้ดูแลระบบเพื่ออนุมัติการอบรม</div>
                ';

               
                echo ' <button type="button" class="btn btn-success btn-xl" onclick="return user_request('.$_SESSION['ID'].');">ร้องขอชิวิต</button>';
               
               



            }

?>                             
     
          
 
                    <!-- Row -->
                 </div>
    </div>
</div>
 <!-- *******************end table************************ -->

  
  


 
 
  






    </body>

</html>