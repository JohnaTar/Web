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
stwlesson.stwLesson_name,
stwlesson.stwLesson_id
FROM
stwlesson


WHERE stwLesson_id ='".$ID."'";
$res =mysqli_query($conn,$sql);
$row =mysqli_fetch_array($res,MYSQLI_ASSOC);


?>
    <div class="row">
      <div class="col-md-6"> 
         <div class="page-header">
                    <h1><?php echo $row['stwLesson_name'];  ?></h1>
        </div>
       </div> 
    </div>
    <?php  

    $sql="SELECT
stwcontent.stwContent_title,
stwcontent.stwContent_detail,
stwcontent.stwContent_img,
stwcontent.stwLesson_id
FROM
stwcontent WHERE stwLesson_id ='".$ID."'
";
$res =mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){


    ?>

    <div class="row">
      <div class="col-md-12"> 
                 <div class="well">
                   <?php echo $row['stwContent_title'];  ?>
                </div>
      </div>
    </div>   
    <div class="row">
      <div class="col-md-12 text-center">   
     <img class="img-thumbnail" src="<?php echo $row['stwContent_img'];?>" alt="" width="350" height="350">
 </div>
    </div>
    <br>


    <div class="row">
      <div class="col-md-12 text-center"  > 
                   <div class="panel">
                    <p><?php echo $row['stwContent_detail']; ?>
                </div>
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