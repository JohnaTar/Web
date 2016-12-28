
<!DOCTYPE html>



    <head>
        <?php 
        include("head/head.php");

        include("checkadmin.php"); 
     
        ?>
        <title>SB Admin - Bootstrap Admin Template</title>
  
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
                        <button type="button" class="btn btn-info btn-xl" data-toggle="modal" data-target="#add_dept">เพิ่มข้อมูลแผนก</button>
                        <br>
                        <br>
                        
                            <table class="table table-bordered table-hover table-striped" id="myTable">
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

                <td><button type="button" class="btn btn-danger btn-xl"
                onclick="return delete_dept(<?php echo $row['stwDept_id']?>);" >ลบ </button></td>

               




                               
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
      
 ?>
  
  


 
 
  






    </body>

</html>