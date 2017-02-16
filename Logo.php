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
                                <i class="fa fa-dashboard"></i>  <a href="index">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Logo
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- ****************start table****** -->                                               
                <div class="row">
                    <div class="col-md-6">
                        <center><h2>โลโก้</h2></center>
 

                            <div class="table-responsive">
                        <button type="button" class="btn btn-info btn-xl" data-toggle="modal" data-target="#addLOGO">เพิ่มโลโก้</button>
                        <br>
                        <br>
                        
                            <table class="table table-striped table-hover" id="myTable">
                                <thead>
                                    <tr>
                                          
                                        <th>ลำดับ</th>
                                        <th>รูปภาพ</th>
                                         <th>เมนู</th>
                                       
                                       
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>   

                                <tr>
   
    <?php
     

        include("connect.php");
    
        $sql = "SELECT * FROM `stwUrllogo`";
        $result = mysqli_query($conn, $sql);
        $i =1;
         while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){

                   
    ?>

                <td><?php echo $i; ?></td>
                <td><?php echo '<img class="img"  width="150" height="150" border="2" src="'.$row['stwUrlname'].'">'; ?></td>

                <td> <button type="button" class="btn btn-success btn-sm" 
                onclick="return use_this_logo(<?php echo $row['stwUrllogo_id']?>);" >ใช้เป็นโลโก้ </button>
                <button type="button" class="btn btn-danger btn-sm" 
                onclick="return del_logo(<?php echo $row['stwUrllogo_id']?>);" >ลบ </button>
               
                </td>

               




                               
                                 </tr>                       
                                <?php $i++;} 
                                mysqli_close($conn);
                                ?>
                                </tbody>
                            </table>
                             </ul>
                            </div>
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
      include("modal/addLOGO.php");
    
      
 ?>
  
  


 
 
  






    </body>

</html>
