<?php
session_start();

if ($_SESSION['ses_id']=='') {
     echo "<script>alert('PLEASE LOGIN')</script>";
     echo "<script>window.location='index.php'</script>";
 
  } else if ($_SESSION['status']== 3 ) {
    echo "<script>alert('NO PERMISSION')</script>";
    echo "<script>window.location='index.php'</script>";

  
} else{
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
                        <center><h2>ตารางแสดงข้อมูลสมาชิก</h2></center>
                            <div class="table-responsive">

                        <button type="button" class="btn btn-info btn-xl" data-toggle="modal" data-target="#myModal">เพิ่มข้อมูลสมาชิก</button>
                           
                         <table class="table table-striped table-hover" id="myTable">
                                <thead>
                                    <tr>
                                          
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>เบอร์โทร</th>
                                        <th>อีเมลล์</th>
                                        <th>แผนก</th> 
                                        <th>ประเภทผู้ใช้</th>
                                        <th>สถานะการอบรม</th>
                                        <th>วันที่สมัคร</th>
                                        <th>เมนู</th>
                                        
                                                                                   
                                    </tr>
                                 </thead>
                                <tbody>   

                                <tr>
   
    <?php
     

        include("connect.php");
        function DateThai($strDate)
    {
        $strYear = date("Y",strtotime($strDate))+543;
        $strMonth= date("n",strtotime($strDate));
        $strDay= date("j",strtotime($strDate));
        $strHour= date("H",strtotime($strDate));
        $strMinute= date("i",strtotime($strDate));
        $strSeconds= date("s",strtotime($strDate));
        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $strMonthThai=$strMonthCut[$strMonth];
        return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
    }

  
 // แสดงวันที่ 
          
              


             

      
        $sql = "SELECT stwUser.stwUser_id,stwUser.stwFirstname,stwUser.stwLastname,stwUser.stwActivate,stwUser.stwGender,stwUser.stwTel,stwUser.stwEmail,stwStatus.stwStatus_name,stwPrefix.stwPrefix_name,
            stwDepartment.stwDept_name,stwUser.stwCreated_date
                FROM stwUser
                INNER JOIN stwStatus
                ON stwUser.stwStatus_id = stwStatus.stwStatus_id 
                INNER JOIN stwDepartment
                ON stwUser.stwDept_id = stwDepartment.stwDept_id
                INNER JOIN stwPrefix
                ON stwUser.stwPrefix_id = stwPrefix.stwPrefix_id";
        $result = mysqli_query($conn, $sql);
      
          
                                 
                 while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                 
                  
                    $strDate = $row['stwCreated_date'];
   
                   
    ?>

                                   
                <td><?php echo 
                    $row['stwPrefix_name']." ".
                    $row['stwFirstname']." ".
                    $row['stwLastname']; ?></td>
                <td><?php echo $row['stwTel']; ?></td>
                <td><?php echo $row['stwEmail']; ?></td>
                <td><?php echo $row['stwDept_name']; ?></td>                
                <td><?php if($row['stwStatus_name'] == 'Administrator'){
                                echo '<span class="label label-danger">Administrator</span>';
                            }
                            else if ($row['stwStatus_name'] == 'Super User' ){
                                echo '<span class="label label-info">Super User</span>';
                            }
                            else if ($row['stwStatus_name'] == 'User' ){
                                echo '<span class="label label-warning">User</span>';
                            }?></td>
               
                <td><?php if($row['stwActivate'] == '1'){
                                echo '<span class="label label-success">อนุมัติ</span>';
                            }
                            else if ($row['stwActivate'] == '2' ){
                                echo '<span class="label label-danger">ไม่อนุมัติ</span>';
                            
                            }?> </td>
                <td><?php   echo DateThai($strDate);; ?></td>
               
<?php 
if ($_SESSION['status']==1) {
                include("menu/admin.php");
             }else if ($_SESSION['status']==2) {
                include("menu/super.php");
             }



?>



                               
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
<?php include("modal/modalAdmin.php");
     
      include("modal/authen.php");
 ?>
  
  


 
 
  






    </body>

</html>