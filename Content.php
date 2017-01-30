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
$Vdo = $row['stwYoutube'];


    ?>
    
    <div class="row">
      <div class="col-md-12"> 
                 <div class="well">
                   <?php echo $row['stwContent_title'];  ?>
                </div>
      </div>
    </div> 
  <div class="row">
    <div class="col-md-12"> 
    <center>
      <script type="text/javascript">
            jwplayer("my-video").setup({
                autostart: false,
                file: "<?php echo $Vdo ;?>",               
                width: "50%",
                aspectratio:"16:9",
                primary: "html",

            });
        </script> 
    <?php echo '<div id ="my-video"></div>'; ?></center>
    
</div>
</div>

    <br> 
    <br>
     
    <div class="row">
      <div class="col-md-12 text-center">  
      <?php if ($row['stwContent_img']== NULL) {
        
      } else{
        $IMG =  $row['stwContent_img'];

      echo '<img class="img-thumbnail" src="'.$IMG.'" alt="" width="450" height="500">';
    }
      ?> 
     
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