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

    $sql="SELECT
stwContent.stwContent_title,
stwContent.stwContent_detail,
stwContent.stwContent_img,
stwContent.stwLesson_id,
stwContent.stwYoutube
FROM
stwContent WHERE stwLesson_id ='".$ID."'
";
$res =mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){


    ?>
    
    <div class="row">
      <div class="col-md-12"> 
                 <div class="well">
                   <h2><?php echo $row['stwContent_title'];?></h2>
                </div>
      </div>
    </div> 
  <div class="row">
  <div class="col-md-2"></div> 
    <div class="col-md-8 "> 
    <?php  if ($row['stwYoutube']==NULl) {
      
    }else{

      $VDO =  $row['stwYoutube'];
      echo ' <div class="embed-responsive embed-responsive-16by9 ">
    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/'.$VDO.'"></iframe> 
    </div>';
    } 
    ?>
   
</div>
    </div>
   

    <br> 
    <br>
     
    <div class="row">
      <div class="col-md-12 text-center">  
      <?php if ($row['stwContent_img']== NULL) {
        
      } else{
        $IMG =  $row['stwContent_img'];

      echo '<img class="img-thumbnail" src="'.$IMG.'" alt="" width="450" height="500" id="pic">';
    }
      ?> 
     
 </div>
    </div>
    
    <br>


    <div class="row">
      <div class="col-md-12 text-center"  > 
                   <div class="panel">
                    
              

        <div id="content" class="outro outro2">
                <div id="rvfs-controllers" class="fontsize-controllers group"></div>
                <div class="post">
                    <p><?php echo $row['stwContent_detail']; ?></p> 
                </div>
            </div>
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