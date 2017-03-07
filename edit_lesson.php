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
                                <i class="fa fa-table"></i> แก้ไขเนือหา
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- *********************************start table************ -->
<?php 
    include("connect.php");
    $ID =$_GET['ID'];
    $sql ="SELECT stwLesson_name FROM stwLesson WHERE stwLesson_id='".$ID."'";
    $res =mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($res,MYSQLI_ASSOC);


?>                                               
                <div class="row">
                    <div class="col-md-12">
                        <center><h2>แก้ไขเนื่อหา :<?php echo $row['stwLesson_name']; ?></h2></center>
                            <div class="table-responsive">

                        <button type="button" class="btn btn-info btn-xl" data-toggle="modal" data-target="#addLesson"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></button>
                        
                           
                         <table class="table table-striped table-hover" id="myTable">
                                <thead>
                                    <tr>
                                          
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Picture</th>
                                        <th>Youtube</th>
                                        <th>Menu</th> 
                                      
                                        
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>   

                                <tr>
   <?php 
   $ID =$_GET['ID'];
    $sql ="SELECT
stwContent.stwContent_id,
stwContent.stwContent_title,
stwContent.stwContent_detail,
stwContent.stwContent_img,
stwContent.stwYoutube,
stwContent.stwLesson_id
FROM
stwContent WHERE stwLesson_id ='".$ID."'";
    $res =mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){

   ?>
<td> <?php echo $row['stwContent_title'];?></td>
<td> <?php echo $row['stwContent_detail'];?></td>
<td><?php echo '<img class="img"  width="50" height="50" border="2" src="'.$row['stwContent_img'].'">'; ?></td>

<td>
 
    <?php if ($row['stwYoutube']==NULL) {  
        }else{
           $VDO =  $row['stwYoutube'];
      echo 'https://www.youtube.com/watch?v='.$VDO.' ';
        }
    ?>
</td>

  
 <td>
       <div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    เมนู<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
   
    
    <li><a href=""  data-toggle="modal" data-target="#edit_info" onclick="return  show_edit_info(<?php echo $row['stwContent_id']?>);"">แก้ไข  
     </a></li>
     <li role="separator" class="divider"></li>
    <li><a href="#" onclick="return del_lesson(<?php echo $row['stwContent_id']?>);" >ลบ </a></li>
    
  </ul>
</div>

 </td>

                
             



                               
                                 </tr>   

                                  <?php } 
                                mysqli_close($conn);
                                ?>                    
                               
                                </tbody>
                            </table>
                            
                            </div>

                        </div>
                        <!-- Grid -->
                    </div>
                    <!-- Row -->
                 </div>
    </div>
</div>
 <!-- *******************end table************************ -->

  <?php 
   include("modal/Info_edit.php");
  include("modal/addLesson.php");
  


  


  ?>


    </body>

</html>