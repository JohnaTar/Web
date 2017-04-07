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
                                <i class="fa fa-puzzle-piece"></i> เอกสารเพิ่มเติม
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- *********************************start table************ -->   
                <div class="row">
                    <div class="col-md-12">
                    <center><h2>เอกสารเพิ่มเติม</h2></center>
 

                            <div class="table-responsive">
<?php
  if ($_SESSION['status']==3) {
                              
    } else{

      echo '
                        <button type="button" class="btn btn-success btn-xl" data-toggle="modal" data-target="#addFILE"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></button>';
    }                          
?>
                      
                        <br>
                        <br>
                        
                            <table class="table table-striped table-hover" id="myTable">
                                <thead>
                                    <tr>
                                          
                                        <th>ลำดับ</th>
                                        <th>ชื่อไฟล์</th>
                                        <th>ผู้อับโหลด</th>
                                        <th>ดาวโหลด</th>
                                        <?php 
                                         if ($_SESSION['status']==1) {
                                             echo '<th>ลบ</th>';
             }else {
             }
                                        ?>
                                      
                                       
                                       
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>  

        <?php 
            include("connect.php");

        $sql = "SELECT * FROM stwFileupload";
        $res =mysqli_query($conn,$sql);
        $i =1;
         while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){

                   
    ?>
            <tr> 

                <td><?php echo $i; ?></td>
                <td><?php echo $row['stwFileupload_name'];?></td>
                <td> 
                    <?php if ($row['stwUser_id']==1) {
                      echo 'Administrator';
                    } else{

$sql ="SELECT stwUser.stwFirstname,stwUser.stwLastname
       FROM stwFileupload
       INNER JOIN stwUser 
       ON stwFileupload.stwUser_id = stwUser.stwUser_id";
$reslut =mysqli_query($conn,$sql);
$ss=mysqli_fetch_array($reslut,MYSQLI_ASSOC);
               echo 
                    
                    $ss['stwFirstname']." ".$ss['stwLastname']; 


                    }

                     ?>
                
                </td>
                <td> <?php if ($_SESSION['status']==3) {
                    echo ' <a href="'.$row['stwFileupload_path'].'" ; " class="btn btn-info btn-xl" ><i class="fa fa-cloud-download fa-2x" aria-hidden="true"></i> </a>
';
                   
                } else {
                     echo ' <a href="'.$row['stwFileupload_path'].'" ; " class="btn btn-info btn-xl" ><i class="fa fa-cloud-download " aria-hidden="true"></i></a>
                     <td>
                     <button type="button" class="btn btn-danger btn-xl" 
                onclick="return del_fileupload ('.$row['stwFileupload_id'].');" ><i class="fa fa-exclamation " aria-hidden="true"></i> </button>
                </td>
';
  

                }

                ?>

               

                 </td>
               


        

                                


                        
                     </tr>
                       <?php $i++;} 
                                mysqli_close($conn);
                                ?>
                     </tbody>
                     </table>
                    </div>                   
                </div>






          
 
                    <!-- Row -->
                 </div>
    </div>
</div>
 <!-- *******************end table************************ -->
<?php    
      include("modal/addFILE.php");
 ?>
  
  


 
 





    </body>

</html>