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
                                <i class="fa fa-table"></i> ข้อมูลแผนก
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- ****************start table****** -->                                               
                <div class="row">
                    <div class="col-md-6">
                        <center><h2>ข้อมูลแผนก</h2></center>
                            <div class="table-responsive">
                        <button type="button" class="btn btn-info btn-xl" data-toggle="modal" data-target="#add_dept"><i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i></button>
                        <br>
                        <br>
                        
                            <table class="table table-striped table-hover" id="myTable">
                                <thead>
                                    <tr>
                                          
                                        <th>ลำดับ</th>
                                        <th>ชื่อแผนก</th>
                                        <th>เมนู</th>
                                       
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>   

                                <tr>
   
    <?php
     

        include("connect.php");
    
        $sql = "SELECT * FROM stwDepartment";
        $result = mysqli_query($conn, $sql);
        $i =1;
         while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                   
    ?>

                <td><?php echo $i; ?></td>
                <td><?php echo $row['stwDept_name']; ?></td>

                <td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_dept"
                onclick="return show_department(<?php echo $row['stwDept_id']?>);" >
<i class="fa fa-wrench fa-2x" aria-hidden="true"></i> </button></td>

               




                               
                                 </tr>                       
                                <?php $i++;} 
                                mysqli_close($conn);
                                ?>
                                </tbody>
                            </table>
                             </ul>
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
      include("modal/add_dept.php");
      include("modal/edit_dept.php");
      
 ?>
  
  


 
 
  






    </body>

</html>