<!DOCTYPE html>


    <head>
        <?php include("head/head.php");?>
        <title>SB Admin - Bootstrap Admin Template</title>
  
    </head>

        <body>
            
            
            <div id="wrapper">

<!-- *************************MENU BAR************************** -->
                <?php include("template/menubar.php"); ?>
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
                                <i class="fa fa-table"></i> ตารางแสดงข้อมูลสมาชิก
                            </li>
                        </ol>
                    </div>
                </div> 

<!-- *****************start table************************* -->                                               
                <div class="row">
                    <div class="col-md-12">
                  <a href="tables.php">Dashboard</a>

                        
                    </div>
                </div> <!-- row  -->

            </div>  <!-- container-fluid  -->

        </div>  <!-- Page wraper -->


                                    <?php include("modal/modalAdmin.php");?>
                                    <?php include("modal/edit.php");?>
  
  


 
 
  






    </body>

</html>
