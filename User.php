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
                    <div class="col-md-12">
                    <h1>Welcome</h1>
  
            <?php 
            echo $_SESSION['ID'];

            ?>                

                   

                        
                    </div>
                </div> <!-- row  -->

            </div>  <!-- container-fluid  -->

        </div>  <!-- Page wraper -->
</div>

  
  


 
 
  






    </body>

</html>
