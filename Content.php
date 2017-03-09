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
                                <i class="fa fa-puzzle-piece"></i> เนื้อหา
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- *********************************start table************ -->   
                <div class="row">
                    <div class="col-md-12">
                    <?php
                    include("connect.php");
$ID =$_GET['ID'];
 $sql ="SELECT
stwLesson.stwLesson_name,
stwLesson.stwLesson_id
FROM
stwLesson


WHERE stwLesson_id ='".$ID."'";
$res =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($res,MYSQLI_ASSOC);


?>
    <div class="row">
      <div class="col-md-12"> 
         <div class="page-header">
                 <h1><?php echo $row['stwLesson_name'];  ?></h1>
        </div>
       </div> 
    </div>
    <?php  

    $sql="SELECT stwContent.stwLesson_id,
stwContent.stwContent_detail
FROM
stwContent WHERE stwLesson_id ='".$ID."'";
$res =mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){


    ?>
    
  
   

    <br> 
    <br>
     
  
    
    <br>

  <div class="row">
   <div class="col-md-12">
              

     
                    <p><?php echo $row['stwContent_detail']; ?></p> 
         
  </div>
</div>

                
    
            

<?php }?>





                        

                    </div>                   
                </div>




 

          
 
                    <!-- Row -->
                 </div>
    </div>
</div>
 <!-- *******************end table************************ -->

  
  


 
 





    </body>

</html>