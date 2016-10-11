<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
<?php 
     include("connect.php");
     $sql = "SELECT * FROM stwUser";

     $result = mysqli_query($conn, $sql);

	                                                      
?>


      
     

    <div id="wrapper">

        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">                 
                </button>
                <a class="navbar-brand" href="index.html">Welcome</a>
            </div>
            <!-- Top Menu Items -->            <ul class="nav navbar-right top-nav">                        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Adminstator <b class="caret"></b></a>
                    <ul class="dropdown-menu">                       
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- ***************************Start left bar************************************ -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"> 
                    <img class="img-responsive" src="img/profile.gif" alt="">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-file""></i> เนื้อหาการอบรม <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>                   
                    <li>                 
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> สร้างหัวข้อการอบรม</a>
                    </li>

                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> รายงานการอบรม</a>
                    </li>
                    <li>
       
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> จัดการข้อมูลสมาชิก</a>
                    </li>
                    <li>
                        <a href="1.html"><i class="fa fa-fw fa-table"></i> กิด</a>
                    </li>
                    <li>
                        <a href="2.html"><i class="fa fa-fw fa-table"></i> รูปแบบ</a>
                    </li>
                    <li>
                        <a href="3.html"><i class="fa fa-fw fa-table"></i> หน้าเปล่า</a>
                    </li>  
                                                    
            </div>
        </nav>
<!-- *********************************end left bar********************************************* -->
        <div id="page-wrapper">
            <div class="container-fluid">            
                <div class="row">
                    <div class="col-lg-12">                    
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
<!-- *********************************start table********************************************* -->                                               
                <div class="row">
                    <div class="col-lg-12">
                        <center><h2>ตารางแสดงข้อมูลสมาชิก</h2></center>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">เพิ่มข้อมูลสมาชิก</button>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
					<th>คำนำหน้า</th>                                      
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>สถานะ</th>
					<th>สถานะการอบรม</th>
                                        <th>เมนู</th>                                            
                                    </tr>
                                 </thead>
                                <tbody>                       
                                    <tr>
			<?php while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){?>

                                        <td><?php echo $row["stwPrefix_id"]; ?></td>
                                     	<td><?php echo $row["stwFirstname"]; ?></td>
					<td><?php echo $row["stwLastname"]; ?></td>
					<td><?php echo $row["stwStatus_id"]; ?></td>
					<td><?php echo $row["stwActivate"]; ?></td>

 
				    </tr>                       
                                   <?php } ?>
                                    </thead>
                                </tbody>
                            </table>
                        </div>
                    </div>
                 </div>
                </div>
 <!-- *********************************end table********************************************* -->
  <!-- *********************************startmodal********************************************* -->
<   
<form class="form-horizontal" action="save.php" method="POST"> 
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1 class="modal-title">เพิ่มข้อมูลสมาชิก</h1>
        </div>
        <div class="modal-body">
         
        <form class="form-horizontal" action="save.php" method="POST"> 
<!-- *********************************username from********************************************* -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อเข้าใช้งาน</label>  
                <div class="col-md-4">
                    <input  name="username" type="text" placeholder="Username" class="form-control input-md" required="">
    
                </div>
            </div>
<!-- *********************************password from********************************************* -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">รหัสเข้าใช้งาน</label>  
                <div class="col-md-4">
                    <input name="password" type="password" placeholder="Password" class="form-control input-md" required="">
    
                </div>
            </div>
             <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ยืนยันรหัสเข้าใช้งาน</label>  
                <div class="col-md-4">
                    <input id="repassword" name="fn" type="password" placeholder="Re-password" class="form-control input-md" required="">
    
                </div>
            </div>
<!-- *********************************first from********************************************* -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">ชื่อ</label>  
                <div class="col-md-4">
                    <input name="fname" type="text" placeholder="Firstname" class="form-control input-md" required="">
    
                </div>
            </div>
<!-- *********************************last from********************************************* -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">นามสกุล</label>  
                <div class="col-md-4">
                    <input  name="lname" type="text" placeholder="Lastname" class="form-control input-md" required="">
    
                </div>
            </div>
<!-- *********************************gender********************************************* -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">เพศ</label>
                    <div class="col-md-4">
                    <select  name="gender" class="form-control input-md">
                <option value="1">ชาย </option>
                <option value="2">หญิง</option>
                </select>
                </div>
            </div>
<!-- **********************************email***************************************************** -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">อีเมลล์</label>  
                <div class="col-md-4">
                    <input  name="email" type="text" placeholder="Email" class="form-control input-md" required="">
    
                </div>
            </div>
<!-- **********************************tel**************************************************** -->
            <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">เบอร์โทร</label>  
                <div class="col-md-4">
                    <input name="tel" type="text" placeholder="Tel" class="form-control input-md" required="">
    
                </div>
            </div>
<!-- **********************************dept**************************************************** -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">แผนก</label>
                    <div class="col-md-4">
                    <select  name="dept" class="form-control input-md">
                <option value="1">ฝ่ายคลังสินค้า  </option>
                <option value="2">ฝ่ายการวางแผนการผลิต</option>
                <option value="3">ฝ่ายผลิต</option>
                <option value="4">ฝ่ายจัดซื้อ</option>
                <option value="5">ฝ่ายธุรการ</option>
                <option value="6">ฝ่ายบัญชี</option>
                <option value="7">ฝ่ายวิศวกรรม</option>
                <option value="8">ฝ่ายการเงิน</option>
                <option value="9">ฝ่ายพัฒนาเทคนิคและคุณภาพ</option>
                <option value="10">ฝ่ายบุคคล</option>
                    </select>
                </div>
            </div>

<!-- **********************************dept**************************************************** -->
                 <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic"></label>
                    <div class="col-md-4">
                    <select  name="status" class="form-control input-md">
                <option value="1">Super user  </option>
                <option value="2">User</option>
                
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
            <button id="submit" name="submit" class="btn btn-primary">ตกลง</button>
                </div>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</form>



 <!-- *********************************end modal********************************************* -->
 



            </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->







</body>

</html>
