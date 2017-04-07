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
                                <i class="fa fa-table"></i> ตารางแสดงข้อมูลสมาชิก
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- *********************************start table************************************* -->
                           
                <div class="row">
                    <div class="col-md-12">
                        <center><h2>ตารางแสดงแบบทดสอบ</h2></center>
                            <div class="table-responsive">

                       
                        
                           
                         <table class="table table-striped table-hover" >
                                <thead>
                                    <tr>
                                          
                                        <th>ชื่อแบบทดสอบ</th>
                                        <th>จำนวนคำถาม</th>
                                        <th>เพิ่ม</th>
                                        <th>จัดการ</th>
                                    
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>   

                                <tr>
   
    <?php
     

        include("connect.php");
     
          
              


             

      
        $sql = "select * from stwSubject";
        $result = mysqli_query($conn, $sql);
      
          
                                 
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $stwSubject_name =$row['stwSubject_name'];    
    $subject_id = $row['stwSubject_id'];

    $sql = "SELECT COUNT(*) FROM stwQuestion WHERE stwSubject_id = $subject_id";  //นับจำนวนคำถามของหัวข้อนี้
    $r = mysqli_query($conn, $sql);
    $num_q = 0;
    if($r) {
        $row = mysqli_fetch_array($r);
        $num_q = $row[0];
    }
                 
                  
                   
    ?>

                 
                <td><?php echo $stwSubject_name; ?></td>
                <td><?php echo $num_q; ?></td>
                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#addQuest" onclick="return show_add_question(<?php echo $subject_id ;?>);" ><i class="fa fa-plus " aria-hidden="true"></i> </button>
                </td>
                <td>
                    <a href="show_question?subject_id=<?php echo $subject_id;?>"> <button type="button"  class="btn btn-info" ><i class="fa fa-cog " aria-hidden="true"></i></button> </a>
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
     
      include("modal/addQuest.php");
 ?>
  
  


 
 
  






    </body>

</html>