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
           <style type="text/css">
            .material-switch > input[type="checkbox"] {
    display: none;   
}

.material-switch > label {
    cursor: pointer;
    height: 0px;
    position: relative; 
    width: 40px;  
}

.material-switch > label::before {
    background: rgb(0, 0, 0);
    box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
    border-radius: 8px;
    content: '';
    height: 16px;
    margin-top: -8px;
    position:absolute;
    opacity: 0.3;
    transition: all 0.4s ease-in-out;
    width: 40px;
}
.material-switch > label::after {
    background: rgb(255, 255, 255);
    border-radius: 16px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    content: '';
    height: 24px;
    left: -4px;
    margin-top: -8px;
    position: absolute;
    top: -4px;
    transition: all 0.3s ease-in-out;
    width: 24px;
}
.material-switch > input[type="checkbox"]:checked + label::before {
    background: inherit;
    opacity: 0.5;
}
.material-switch > input[type="checkbox"]:checked + label::after {
    background: inherit;
    left: 20px;
}
        </style>
        
  
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
                                <i class="fa fa-table"></i> ตารางแสดงข้อมูลสมาชิก
                            </li>
                        </ol>
                    </div>
                </div> 
<!-- *********************************start table************************************* -->
<?php 
        if ($_SESSION['status']==1) {
            echo ' <button type="button" class="btn btn-info btn-xl" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i> </button> :
             <button type="button" class="btn btn-danger btn-xl" data-toggle="modal" data-target="#add_exel"><i class="fa fa-file-excel-o fa-2x" aria-hidden="true"></i></button>';
        } else{
            
        }
        

?>                    
<form method="POST" id="delete_user" onsubmit="return delete_user_form();">                          
                <div class="row">
                    <div class="col-md-12">
                      <div class="material-switch pull-right">
                            <input id="someSwitchOptionInfo" name="someSwitch" type="checkbox"/>
                            <label for="someSwitchOptionInfo" class="label-warning"></label>
                         <button type="submit" name="ss"   class="btn btn-warning"><i class="fa fa-trash-o " aria-hidden="true"></i></button>
<input type="hidden" name="tar">
                        </div>
                        
                        <center><h2>ตารางแสดงข้อมูลสมาชิก</h2></center>
                       
                            <div class="table-responsive">

                       
                        
                           
                         <table class="table table-striped table-hover" id="myTable">
                                <thead>
                                    <tr>
                                          
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>เบอร์โทร</th>
                                        <th>อีเมลล์</th>
                                        <th>แผนก</th> 
                                        <th>ประเภทผู้ใช้</th>
                                        <th>วันที่เพิ่มข้อมูล</th>
<?php 
if ($_SESSION['status']==1) {
               echo '<th>แก้ไข</th><th>ตัวเลือก</th>
               ';
             }else {
             }



?>
                                      
                                                                                   
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
        return "$strDay/$strMonthThai/$strYear $strHour:$strMinute";
    }

  
 // แสดงวันที่ 
          
              


             

      
        $sql = "SELECT stwUser.stwUser_id,stwUser.stwFirstname,stwUser.stwLastname,stwUser.stwGender,stwUser.stwTel,stwUser.stwEmail,stwStatus.stwStatus_name,stwPrefix.stwPrefix_name,
            stwDepartment.stwDept_name,stwUser.stwCreated_date  
                FROM stwUser  
                INNER JOIN stwStatus
                ON stwUser.stwStatus_id = stwStatus.stwStatus_id 
                INNER JOIN stwDepartment
                ON stwUser.stwDept_id = stwDepartment.stwDept_id
                INNER JOIN stwPrefix
                ON stwUser.stwPrefix_id = stwPrefix.stwPrefix_id
                ORDER BY stwUser.stwUser_id ASC
                
                ";
        $result = mysqli_query($conn, $sql);
      
          
                                 
                 while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                 $stwUser_id=$row['stwUser_id'];
                  
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
                                echo '<i class="fa fa-user-secret fa-2x btn-warning" aria-hidden="true"></i>';
                            }
                            else if ($row['stwStatus_name'] == 'User' ){
                                echo '<i class="fa fa-user fa-2x btn-info" aria-hidden="true"></i>';
                            }?>
                                
                </td>

              
               
                
                <td><?php   echo DateThai($strDate);; ?></td>
               
<?php 
if ($_SESSION['status']==1) {
                include("menu/admin.php");
             }else {
             }



?>
<td>
    <input type="checkbox" name="User[]" class="checkbox" value="<?php echo $stwUser_id; ?> ">
</td>

</form> 

                               
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
     
      include("modal/add_exel.php");
 ?>
  
  


 
 
  

 <script type="text/javascript">
        $(document).ready(function(){
    $('#someSwitchOptionInfo').on('click',function(){
        if(this.checked){
            $('input:checkbox[name="User[]"]').each(function(){
                this.checked = true;
            });
        }else{
             $('input:checkbox[name="User[]"]').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('input:checkbox[name="User[]"]').on('click',function(){
        if($('input:checkbox[name="User[]"]:checked').length == $('input:checkbox[name="User[]"]').length){
            $('#someSwitchOptionInfo').prop('checked',true);
        }else{
            $('#someSwitchOptionInfo').prop('checked',false);
        }
    });
    });
  </script>
 



    </body>

</html>